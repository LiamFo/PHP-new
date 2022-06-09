<?php


class BroodOverzicht{

    public $Broodjes;

    function __construct(){
        $this->Broodjes = [
            new Brood('Wit Brood', 15,'//unsplash.it/300/200/'),
            new Brood('Wit Brood', 14,'//unsplash.it/300/200/'),
            new Brood('Brujn Brood', 12,'//unsplash.it/300/200/'),
            new Brood('Meer Brood', 11,'//unsplash.it/300/200/'),
            new Brood('Meer Brood', 10,'//unsplash.it/300/200/')
        ];
    }

    function getBroodLijst(){
        return $this->Broodjes;
    }

    function voegBroodToe($type, $prijs, $image_url){
        $newBrood = new Brood($type, $prijs, $image_url);
        $this->Broodjes[] = $newBrood;
    }

    function getFilteredList($minPrijs, $maxPrijs, $selectType){
        $FilteredList = [];
        for($i=0;$i < count($this->Broodjes);$i++){  
            $br00d = $this->Broodjes[$i];
            if($br00d->getPrijs() > $minPrijs && $br00d->getPrijs() < $maxPrijs && $br00d->getType() == $selectType){
                array_push($FilteredList, $br00d);
            }
        }
        return $FilteredList;
    }

}