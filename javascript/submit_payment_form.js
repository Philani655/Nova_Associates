function submit_form()
{
    document.getElementById("paymentForm").submit();
    var total = document.getElementById("price").value;
    document.getElementById("price").value = total ;
}

function submit_form_order()
{
    var total = document.getElementById("price").value;
    document.getElementById("price").value = Number(total) + 400;
    document.getElementById("paymentForm").submit();
}

