<?php
include_once "connection.php";
   
include_once "tfphp.php"; 

if(isset($_GET["Gen"])){
GenerateItems($dph);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="tfui.js"></script>
    <link href="http://fonts.cdnfonts.com/css/tf2-build" rel="stylesheet">
    <title>TF2 Weapon Randomizer</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Team_Fortress_2_style_logo.svg/1024px-Team_Fortress_2_style_logo.svg.png">
</head>
<body>

<div class="background">

    <div class="class-box" style="margin:auto;margin-top:20px;">
        <img onClick="location.href='index.php?0'" class="outline" id="class1" src="https://wiki.teamfortress.com/w/images/0/0a/Scout_emblem_RED.png" style="width:50px;height:50px;">
        <img onClick="location.href='index.php?1'" class="outline" id="class2" src="https://wiki.teamfortress.com/w/images/d/de/Soldier_emblem_RED.png" style="width:50px;height:50px;">
        <img onClick="location.href='index.php?2'" class="outline" id="class3" src="https://wiki.teamfortress.com/w/images/b/b1/Pyro_emblem_RED.png" style="width:50px;height:50px;">

        <img onClick="location.href='index.php?3'" class="outline" id="class4" src="https://wiki.teamfortress.com/w/images/8/8c/Demoman_emblem_RED.png" style="width:50px;height:50px;">
        <img onClick="location.href='index.php?4'" class="outline" id="class5" src="https://wiki.teamfortress.com/w/images/4/48/Heavy_emblem_RED.png" style="width:50px;height:50px;">
        <img onClick="location.href='index.php?5'" class="outline" id="class6" src="https://wiki.teamfortress.com/w/images/c/cf/Engineer_emblem_RED.png" style="width:50px;height:50px;">

        <img onClick="location.href='index.php?6'" class="outline" id="class7" src="https://wiki.teamfortress.com/w/images/1/11/Medic_emblem_RED.png" style="width:50px;height:50px;">
        <img onClick="location.href='index.php?7'" class="outline" id="class8" src="https://wiki.teamfortress.com/w/images/f/fb/Sniper_emblem_RED.png" style="width:50px;height:50px;">
        <img onClick="location.href='index.php?8'" class="outline" id="class9" src="https://wiki.teamfortress.com/w/images/9/95/Spy_emblem_RED.png" style="width:50px;height:50px;">
    </div>

    <div style="margin-left:640px;margin-top:-70px;"> <!--login/sign up page buttons-->
        <button class="text login-button" onclick="location.href='inlog.php'">Login</button>
    </div>
    <div style="margin-left:805px;margin-top:-39px;">
        <button class="text login-button" onclick="location.href='signup.php'">Sign Up</button>
    </div>

    <div class="weapon-box" style="margin:auto;margin-top:55px;"> <!--weapon type box-->
        <img onClick="SelectedWeapon(this)" id="class10" src="https://wiki.teamfortress.com/w/images/3/34/Killicon_scattergun.png" class="sub-weapon-box" style="width:70px;height:20px;">
        <img onClick="SelectedWeapon(this)" id="class11" src="https://wiki.teamfortress.com/w/images/1/1a/Killicon_pistol.png" class="sub-weapon-box" style="width:30px;height:20px;">
        <img onClick="SelectedWeapon(this)" id="class12" src="https://wiki.teamfortress.com/w/images/d/de/Killicon_bat.png" class="sub-weapon-box" style="width:65px;height:20px;">
        <p class="text sub-sub-weapon-box" style="width:fit-content;text-align:center;">Primary  Secondary  Melee</p>
    </div>
        <div onclick="location.href='index.php?Gen'" class="list-button" style="margin:auto;margin-top:-95px;margin-left:600px;">
            <p class="text">Generate List</p>
        </div>

    <!-- <div class="list-box" style="width:700px;margin-top:60px;">
        <p class="list-text" style="margin-top:20px;">Weapon Name</p>
            <div style="text-align:left;margin-top:-50px;">
                <img class="list-image" src="https://wiki.teamfortress.com/w/images/7/74/Backpack_Scattergun.png">
            </div>
        <div class="done-button" style="margin:auto;margin-top:-65px;margin-left:320px;">
            <p class="text">Done</p>
        </div>
    </div> -->

    <?php 
    if(isset($_GET["0"])){
        FilterClass(0);
        }

    if(isset($_GET["1"])){
        FilterClass(1);
        }

    if(isset($_GET["2"])){
        FilterClass(2);
        }

    if(isset($_GET["3"])){
        FilterClass(3);
        }

    if(isset($_GET["4"])){
        FilterClass(4);
        }

    if(isset($_GET["5"])){
        FilterClass(5);
        }

    if(isset($_GET["6"])){
        FilterClass(6);
        }

    if(isset($_GET["7"])){
        FilterClass(7);
        }
  
    if(isset($_GET["8"])){
        FilterClass(8);
        }

    runclass();
    ?>
</div>
</body>
</html>