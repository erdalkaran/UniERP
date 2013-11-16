<?php

class Ogrenci extends Kisi {
    public $ogrenciNo;
    public $bolum;
    public $sinif;
    
    public function notGir($derskodu,$not) {
        
        return true;
    }
}
