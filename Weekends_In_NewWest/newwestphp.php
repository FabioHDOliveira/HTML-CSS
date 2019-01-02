<html>
    <head>
        
        <title>Form New West Weekend</title>
        
    </head>
    
    <body>
        <?php
            
            $bookmovies=$_POST['bookmovies'];
        ?>
            
        <?php
            $to = "fabiodias.tst@hotmail.com";
            $subject = "New West HTML bookmovies";
            $message = "<strong>Books and Movies:</strong>$bookmovies";
            $header = "MIME-Version: 1.0\n";
            $header .= "Content-type: text/html; charset=iso-8859-1\n";
            $header .= "From: $bookmovies\n";
            mail($to, $subject, $message, $header);
            echo "Message sent successfully!";
        ?>
    </body>
    
</html>