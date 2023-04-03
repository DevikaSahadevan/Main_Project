<?php
   include "../dbconnect.php"; 
?>
<html>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<div class="center">
    <form>
        <input type="text" id="amts" name="amts">
        <input type="button" name="pay" id ="rzp-button1" value="payment" onclick="pay_now()">
    </form>
</div>

<script>
    function pay_now(){
    var amt=document.getElementById('amts').value;
    alert(amt);
    var options = {
    "key": "rzp_test_Dkz3Rhxq2rGxRk",
    "amount": amt*100, 
    "currency": "INR",
    "name": "Daycare",
    "description": "Test Transaction",
    // "image": "https://drive.google.com/file/d/1FJCNPPMhML96z3s4IrR8-yGU4A6HLm2X/view?usp=share_link",
    "handler":function(response){
        console.log(response);
        jQuery.ajax({
            type:'POST',
            url:'payment.php',
            data:"payment_id="+response.razorpay_payment_id+"&amt="+amt+"&name="+name,
            success:function(result){
                alert("Payment Successfull")
                // window.location.href="uploadfile/component-file-upload.php?payment_id="+response.razorpay_payment_id;
            }

        })
        // if(response){
        //     window.location.href="/adsol/index.php";
        // }
       

    }
};

var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}

}
</script>
</html>