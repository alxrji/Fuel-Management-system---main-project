<?php  include "config.php";
echo $_SESSION['price'];
?>
<html>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<?php
$sql="Select "
?>
<form>
    <input type="text" name = "name" id = "name">
    <input type="text" name="amt" id="amt">


    <input type="button" name="pay" id ="rzp-button1" value="pay now" onclick="pay_now()">
    
</form>
<script>
    function pay_now(){

    var name=jQuery('#name').val();
    var amt=jQuery('#amt').val();
    var options = {
    "key": "apiKey",
    "amount": 50*100, 
    "currency": "INR",
    "name": "FUEL",
    "description": "Test Transaction",
    "image": "https://drive.google.com/file/d/1FJCNPPMhML96z3s4IrR8-yGU4A6HLm2X/view?usp=share_link",
    
    "theme":{
        "color": "#09746c"
    },
    "handler":function(response){
        console.log(response);
        jQuery.ajax({
            type:'POST',
            url:'payment.php',
            data:"payment_id="+response.razorpay_payment_id+"&amt="+amt+"&name="+name,
            success:function(result){
                window.location.href="thankyou.php";
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