function email_validation()
{
    let result = true;
    const email = document.getElementById("email").value.trim();
    const name = document.getElementById("name").value.trim();
    
    var companyEmail= "sfundozulu105@gmail.com";
    
    if(email==companyEmail)
    {
        alert(name+" your email have been sent");
        document.getElementById("email").value =" ";
        document.getElementById("name").value = " ";
        result = true;
    }
    else
    {
        alert("Something went wrong with sending comment,Please check the email!");
        result = false; 
    }
    
    return result;
}


