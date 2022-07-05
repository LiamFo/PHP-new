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

<div class="background" id="background">

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


    <div class="weapon-box" style="margin:auto;margin-top:55px;"> <!--weapon type box-->
        <img onClick="location.href='index.php?10'" id="class10" src="https://wiki.teamfortress.com/w/images/3/34/Killicon_scattergun.png" class="sub-weapon-box" style="width:70px;height:20px;">
        <img onClick="location.href='index.php?11'" id="class11" src="https://wiki.teamfortress.com/w/images/1/1a/Killicon_pistol.png" class="sub-weapon-box" style="width:30px;height:20px;">
        <img onClick="location.href='index.php?12'" id="class12" src="https://wiki.teamfortress.com/w/images/d/de/Killicon_bat.png" class="sub-weapon-box" style="width:65px;height:20px;">
        <p class="text sub-sub-weapon-box" style="width:fit-content;text-align:center;">Primary  Secondary  Melee</p>
    </div>
        <div onclick="location.href='index.php?Gen'" class="list-button" style="margin:auto;margin-top:-95px;margin-left:600px;">
            <p class="text">Generate List</p>
        </div>

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

/////////////////////////////////////////

    if(isset($_GET["10"])){
        FilterWeapon(10);
        }
    
    if(isset($_GET["11"])){
        FilterWeapon(11);
        }
    
    if(isset($_GET["12"])){
        FilterWeapon(12);
        }

    runclass();
    runWeapon();
    ?>

<div class="list-box" style="opacity:0%;" id="weapon-container"></div>
  <script>
    var weaponContainer = document.getElementById("weapon-container");
    for(i = 0; i < weapons.length; i++) {
      var weapon = weapons[i];

      var weaponimage = document.createElement("img");
      weaponimage.src = weapon.image;
      weaponimage.classList.add("list-image");

      var element = document.createElement("span");
      element.innerHTML = weapon.name;
      element.classList.add("list-name");

      var weaponclass = document.createElement("span");
      weaponclass.innerHTML = weapon.class;
      weaponclass.classList.add("weapon-entry-line2");
      weaponclass.classList.add("list-class");

      var weaponEntry = document.createElement("div");
      weaponEntry.classList.add("weapon-entry");

      weaponEntry.appendChild(weaponimage);
      weaponEntry.appendChild(element);
      weaponContainer.appendChild(weaponEntry);
      weaponContainer.appendChild(weaponclass);
    }

    document.getElementById('weapon-container').style.opacity = 1;

    document.getElementById('background').style.height = "fit-content";
</script>
</div>
</body>
</html>