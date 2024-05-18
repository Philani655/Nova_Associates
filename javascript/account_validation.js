// takes the form field value and returns true on valid number
function valid_credit_card() 
{
    let cardNumber = document.getElementById("cardNumber").value;
    let result = true;
    
    var inputNum = cardNumber.toString();
    var sum = 0;
    var doubleUp = false;

    /* from the right to left, double every other digit starting with the second to last digit.*/
    for (var i = inputNum.length - 1; i >= 0; i--)
    {
        var curDigit = parseInt(inputNum.charAt(i));

        /* double every other digit starting with the second to last digit */
        if(doubleUp)
        {
            /* doubled number is greater than 9 than subtracted 9 */
            if((curDigit*2) > 9)
            {
              sum +=( curDigit*2)-9;
            }
            else
            {
              sum += curDigit*2;
            }
        }
        else
        {
          sum += curDigit;
        }
        var doubleUp =!doubleUp
    }

  /* sum and divide it by 10. If the remainder equals zero, the original credit card number is valid.  */
  
    if((sum % 10) == 0)
    {
        result = true;
    }
    else
    {
        alert('Invalid card number!')
        result = false;
    }
    
    if(inputNum.length !=16)
    {
       alert('Invalid card number lenght!')
        result = false; 
    }
    
    return result;
}

function amount_validate()
{
    let amount = document.getElementById("amount").value;
    let price = document.getElementById("price").value;
    var total = Number(price) - Number(amount);
    
    let result = true;
    
    var inputNum = amount.toString();
    if(/^\d+$/.test(inputNum))
    {
        result = true;
    }
    else
    {
        alert('Invalid amount');
        result = false;
    }
    
    if(Number(total)>0)
    {
        alert('The amount is not enoght');
        result = false;
    }
    
    if(Number(total)<0)
    {
        alert("R"+price+" will be taken to your account");
        result = true;
    }
     
    return result;
}



