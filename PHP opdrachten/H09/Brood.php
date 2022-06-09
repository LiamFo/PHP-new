<?php

class Brood{

    private $type;
    private $prijs;
    private $image_url;

    function __construct($type, $prijs, $image_url){
      $this->type = $type;
      $this->prijs = $prijs;
      $this->image_url = $image_url;
    }

    function getType(){
      return $this->type;
    }

    function getPrijs(){
      return $this->prijs;
    }

    function getImageURL(){
      return $this->image_url;   //get ^^ | set vv//
    }

    function setType($type){
      $this->type = $type;
    }

    function setPrijs($prijs){
      $this->prijs = $prijs;
    }

    function setImageURL($image_url){
      $this->image_url = $image_url;
    }
}