function validate_account()
{
    let isValid = true;
    
    //getting data from the form using id
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const password = document.getElementById("password").value.trim();
    const confirm_password = document.getElementById("confirm_password").value.trim();
    
    //checking the email requirement
    if (!email.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/)) 
    {
        alert("Please fill in the valid email address");
        isValid = false;
    }

    //checking the phone number requirements
    if (!phone.match(/^0\d{9}$/))
    {
        alert("Contact number must begin with 0 and contain 10 digits");
        isValid = false;
    }
    
    //compare the passwords
    if (password !== confirm_password)
    {
        alert("Passwords do not match");
        isValid = false;
    }
    
    if(phone.length!=10)
    {
        alert("Phone number must have 10 digit");
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



