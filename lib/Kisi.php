<?php


class Kisi {
    public $baslangicYili;
    public $isim;
    public $soyisim;
    public $dogumTarihi;//sadece yil
    
    public function getUzunIsim() {

        return $this->isim . ' ' . $this->soyisim;
 
    }
    public function getYAS() {
   
        return date('Y') - $this->dogumTarihi;        
        
    }
}
