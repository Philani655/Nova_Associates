function validate_login()
{
    let isValid = true;
    
    //getting data from the form using id
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    
    //checking the email requirement
    if (!email.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/)) 
    {
        alert("Please fill in the valid email address");
        isValid = false;
    }

    //checking the password requirements
    if (!password.match(/^(?=.*[A-Z])(?=.*\d)(?=.*[@!*&])[A-Za-z\d@!*&]{8,}$/)) 
    {
        alert("Password must be at least 8 characters long and contain at least one capital letter, one number, and one symbol (@, !, *, &)");
        isValid = false;
    }
    return isValid;  
}



