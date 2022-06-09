<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakkerij</title>
</head>
<body>

<form action="index.php" method="post">
    <label for="type">Type</label>
<select id="type" name="type">
    <option value="Wit Brood">Wit Brood</option>
    <option value="Brujn Brood">Brujn Brood</option>
    <option value="Meer Brood">Meer Brood</option>
    <option value="More">Nog Meer Brood</option>
</select>
    <br>
    <label for="minPrijs">Minimal price</label>
    <input type="text" name="minPrijs" id="minPrijs">
    <br>
    <label for="maxPrijs">Maximal price</label>
    <input type="text" name="maxPrijs" id="maxPrijs">
    <br>
    <input type="submit">
    <br>
    <br>
</form>
    
</body>
</html>

<!---------------------------------------------->

<?php

require('Brood.php');
require('BroodOverzicht.php');

//----------------------------------------------//
print_r($_POST);
if(isset($_POST['minPrijs']) && $_POST['minPrijs'] != ''){
    $minPrijs = $_POST['minPrijs'];
}else{
    $minPrijs = 0;
}

if(isset($_POST['maxPrijs']) && $_POST['maxPrijs'] != '' ){
    $maxPrijs = $_POST['maxPrijs'];
}else{
    $maxPrijs = 99999;
}

if(isset($_POST['type'])){
    $selectType = $_POST['type'];
}

//----------------------------------------------//

$BroodOverzicht = new BroodOverzicht();
$BroodOverzicht->voegBroodToe('More', 1.50,'//unsplash.it/300/200/');
$BroodOverzicht->voegBroodToe('More', 2.25,'//unsplash.it/300/200/');

foreach($BroodOverzicht->getFilteredList($minPrijs,$maxPrijs,$selectType) as $br00d){
    echo "<br>".$br00d->getType() ." " .'-' ." " ."$".$br00d->getPrijs();
    echo '<br><img src="'.$br00d->getImageURL(). '" alt="brood image" <br><br>';
}

//----------------------------------------------//
