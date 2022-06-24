<?php

session_start();


if(!isset($_SESSION["classArray"])){
$_SESSION["classArray"] = ["scout","soldier","pyro","demoman","heavy","engineer","medic","sniper","spy"];
$_SESSION["WeaponArray"] = ["primary","secondary","melee"];
}

print_r ($_SESSION["classArray"]);

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

function FilterWeapon(){

}

function GenerateItems($con){  /////////////////////////////

for($i = 0;$i < 9; $i++){
    $where = $_SESSION["classArray"][$i];

    if($where != ""){
        $prim =  'SELECT primname FROM primaryweapons WHERE tf2class_classname = "'.$where.'"ORDER BY rand() LIMIT 1';

        foreach ($con->query($prim) as $row) {
            echo $row["primname"];
        }
    }
}

}

function CreateList(){ ////////////////////////////////
    print_r($classarray);
    echo $classarray;
}
?>
