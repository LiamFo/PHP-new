<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body style="background: #34302d;">

<p1 class="list-text">Sign Up<br></p1>

    <form class="list-text login-box" style="height:220px;text-align: left;" action="index.html" method="POST">
        Username <br><input style="margin-top:20px;" type="text" name="username" value="" required>
        <br>
        <br>
        Password <br><input type="password" name="password" value="" required>
        <input class="login-button text" type="submit" name="knop" value="Submit">
    </form>

    
    <div style="margin-left:-633px;margin-top:-62px;">
        <button class="text login-button" onclick="location.href='index.php?Back'">Back</button>
    </div>
</body>

<?php
session_start();
    print_r($_GET);

    if(isset($_GET['Back'])){
        $_SESSION = array();
        session_destroy();
    }
?>