<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body style="background: #34302d;">

<p1 class="list-text">Login<br></p1>

    <form class="list-text login-box" action="index.html" method="POST">
        Username <input style="margin-top:20px;" type="text" name="username" value="" required>
        Password <input type="password" name="password" value="" required>
        <input class="login-button text" type="submit" name="knop" value="Submit">
    </form>
    
    <div style="margin-left:15px;margin-top:-60px;">
        <button class="text login-button" onclick="location.href='index.php'">Back</button>
    </div>
</body>
