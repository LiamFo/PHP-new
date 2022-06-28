<?php

session_start();


if(!isset($_SESSION["classArray"])){
$_SESSION["classArray"] = ["scout","soldier","pyro","demoman","heavy","engineer","medic","sniper","spy"];
}

if(!isset($_SESSION["WeaponArray"])){
    $_SESSION["WeaponArray"] = ["primname","secname","melname"];
}

// print_r ($_SESSION["classArray"]);
// print_r ($_SESSION["WeaponArray"]);

function runclass(){
    if($_SESSION["classArray"][0] == "scout"){
        echo "<script> document.getElementById('class1').classList.remove('selected'); </script>";
    }else{
        echo "<script> document.getElementById('class1').classList.add('selected'); </script>";
    }

    if($_SESSION["classArray"][1] == "soldier"){
        echo "<script> document.getElementById('class2').classList.remove('selected'); </script>";
    }else{
        echo "<script> document.getElementById('class2').classList.add('selected'); </script>";
    }

    if($_SESSION["classArray"][2] == "pyro"){
        echo "<script> document.getElementById('class3').classList.remove('selected'); </script>";
    }else{
        echo "<script> document.getElementById('class3').classList.add('selected'); </script>";
    }

    if($_SESSION["classArray"][3] == "demoman"){
        echo "<script> document.getElementById('class4').classList.remove('selected'); </script>";
    }else{
        echo "<script> document.getElementById('class4').classList.add('selected'); </script>";
    }

    if($_SESSION["classArray"][4] == "heavy"){
        echo "<script> document.getElementById('class5').classList.remove('selected'); </script>";
    }else{
        echo "<script> document.getElementById('class5').classList.add('selected'); </script>";
    }

    if($_SESSION["classArray"][5] == "engineer"){
        echo "<script> document.getElementById('class6').classList.remove('selected'); </script>";
    }else{
        echo "<script> document.getElementById('class6').classList.add('selected'); </script>";
    }

    if($_SESSION["classArray"][6] == "medic"){
        echo "<script> document.getElementById('class7').classList.remove('selected'); </script>";
    }else{
        echo "<script> document.getElementById('class7').classList.add('selected'); </script>";
    }

    if($_SESSION["classArray"][7] == "sniper"){
        echo "<script> document.getElementById('class8').classList.remove('selected'); </script>";
    }else{
        echo "<script> document.getElementById('class8').classList.add('selected'); </script>";
    }

    if($_SESSION["classArray"][8] == "spy"){
        echo "<script> document.getElementById('class9').classList.remove('selected'); </script>";
    }else{
        echo "<script> document.getElementById('class9').classList.add('selected'); </script>";
    }
}


function FilterClass($id){
    echo($id);
 if($id == 0){
    if($_SESSION["classArray"][0] == "scout"){
        $_SESSION["classArray"][0] = "";
    }else{
        $_SESSION["classArray"][0] = "scout";
    }

}

if($id == 1){
    if($_SESSION["classArray"][1] == "soldier"){
        $_SESSION["classArray"][1] = "";
    }else{
        $_SESSION["classArray"][1] = "soldier";
    }
}

if($id == 2){
    if($_SESSION["classArray"][2] == "pyro"){
        $_SESSION["classArray"][2] = "";
    }else{
        $_SESSION["classArray"][2] = "pyro";
    }
}

if($id == 3){
    if($_SESSION["classArray"][3] == "demoman"){
        $_SESSION["classArray"][3] = "";
    }else{
        $_SESSION["classArray"][3] = "demoman";
    }
}

if($id == 4){
    if($_SESSION["classArray"][4] == "heavy"){
        $_SESSION["classArray"][4] = "";
    }else{
        $_SESSION["classArray"][4] = "heavy";
    }
}

if($id == 5){
    if($_SESSION["classArray"][5] == "engineer"){
        $_SESSION["classArray"][5] = "";
    }else{
        $_SESSION["classArray"][5] = "engineer";
    }
}

if($id == 6){
    if($_SESSION["classArray"][6] == "medic"){
        $_SESSION["classArray"][6] = "";
    }else{
        $_SESSION["classArray"][6] = "medic";
    }
}

if($id == 7){
    if($_SESSION["classArray"][7] == "sniper"){
        $_SESSION["classArray"][7] = "";
    }else{
        $_SESSION["classArray"][7] = "sniper";
    }
}

if($id == 8){
    if($_SESSION["classArray"][8] == "spy"){
        $_SESSION["classArray"][8] = "";
    }else{
        $_SESSION["classArray"][8] = "spy";
    }
}

}

///////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////(line-to-split-class-and-weapon-functions)////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////

function runWeapon(){
    if($_SESSION["WeaponArray"][0] == "primname"){
        echo "<script> document.getElementById('class10').classList.remove('selected'); </script>";
    }else{
        echo "<script> document.getElementById('class10').classList.add('selected'); </script>";
    }

    if($_SESSION["WeaponArray"][1] == "secname"){
        echo "<script> document.getElementById('class11').classList.remove('selected'); </script>";
    }else{
        echo "<script> document.getElementById('class11').classList.add('selected'); </script>";
    }

    if($_SESSION["WeaponArray"][2] == "melname"){
        echo "<script> document.getElementById('class12').classList.remove('selected'); </script>";
    }else{
        echo "<script> document.getElementById('class12').classList.add('selected'); </script>";
    }
}

function FilterWeapon($id){
    if($id == 10){
        if($_SESSION["WeaponArray"][0] == "primname"){
            $_SESSION["WeaponArray"][0] = "";
        }else{
            $_SESSION["WeaponArray"][0] = "primname";
        }
    }

    if($id == 11){
        if($_SESSION["WeaponArray"][1] == "secname"){
            $_SESSION["WeaponArray"][1] = "";
        }else{
            $_SESSION["WeaponArray"][1] = "secname";
        }
    }

    if($id == 12){
        if($_SESSION["WeaponArray"][2] == "melname"){
            $_SESSION["WeaponArray"][2] = "";
        }else{
            $_SESSION["WeaponArray"][2] = "melname";
        }
    }
}

// function GenerateItems($con){  /////////////////////////////
//     echo "<br>";
// for($i = 0;$i < 9; $i++){
//     $where = $_SESSION["classArray"][$i];
//     for($j = 0; $j < 3; $j++){
       
//     $weapontype = $_SESSION["WeaponArray"][$j];
//     if($weapontype == "primname"){
//         $weapons = "primary";
//     }else if($weapontype == "secname"){
//         $weapons = "secondary";
//     }else if($weapontype == "melname"){
//         $weapons = "melee";
//     }

//     if($where != "" && $weapontype != ""){
//         $prim =  'SELECT '. $weapontype.', image, tf2class_classname FROM '.$weapons.'weapons WHERE tf2class_classname = "'.$where.'"ORDER BY rand() LIMIT 1';
//         foreach ($con->query($prim) as $row) {
//             echo "<div class='list-text list-box' style='width:600px;'>";
//             echo "<div class='list-image'>";
//             echo "<img src='".$row["image"]."'style='width:150px;height:113px;' >";
//             echo "</div>";

//             echo "<div style='margin-top:-110px;text-align:center;'>";
//             echo $row[$weapontype];

//             echo "<div style='margin-top:50px;text-align:center;'>";
//             echo "<br>".$row["tf2class_classname"];
//             echo "</div>"."</div>"."</div>"."<br>";
//         }
//     }
//     }
// }
// }

function GenerateItems($con){
    echo "<br>";
for($i = 0;$i < 9; $i++){
    $where = $_SESSION["classArray"][$i];
    for($j = 0; $j < 3; $j++){
       
    $weapontype = $_SESSION["WeaponArray"][$j];
    if($weapontype == "primname"){
        $weapons = "primary";
    }else if($weapontype == "secname"){
        $weapons = "secondary";
    }else if($weapontype == "melname"){
        $weapons = "melee";
    }

    if($where != "" && $weapontype != ""){
        $prim =  'SELECT '. $weapontype.', image, tf2class_classname FROM '.$weapons.'weapons WHERE tf2class_classname = "'.$where.'"ORDER BY rand() LIMIT 1';
        $result = array();
        foreach ($con->query($prim) as $row) {
            $weapon = array();
            $weapon["class"] = $row["tf2class_classname"];
            // add to array
            $result[] = $weapon;
        }
        echo "<script>";
        echo "const weapons = " . json_encode($result) . ";";
        echo "</script>";
    }
 }
}
}
?>