<?php
    $siteKey = "6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI";
    $secretKey = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";

    $captcha;
    if(isset($_POST['g-recaptcha-response'])){
        $captcha=$_POST['g-recaptcha-response'];
    }

    if(!$captcha){
        echo "<h2>Tenes que completar el captcha</h2>";
        exit;
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    // Request al Servidor
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".urlencode($secretKey)."&response=".urlencode($captcha);
    $response = file_get_contents($url);
    $responseKeys = json_decode($response, true);
    
    // Verificamos la respuesta
    if($responseKeys["success"]) {
        echo "<h1>Captcha validado</h1>";
    } else {
        echo "<h1>El captcha no fue validado</h1>";
    }
?>