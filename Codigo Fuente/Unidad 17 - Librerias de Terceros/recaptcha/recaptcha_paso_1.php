<html>
    <head>
        <title>Google reCAPTCHA</title>
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    </head>
    <body>
        <h1>Google reCAPTCHA</h1>

        <?php
            $siteKey = '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI';
            $secretKey = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
        ?>

        <form action="recaptcha_paso_2.php" method="post">        
            <div class="g-recaptcha" data-sitekey="<?php echo $siteKey ?>"></div>
            <br>
            <br>
            <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </body>
</html>