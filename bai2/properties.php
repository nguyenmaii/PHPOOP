<?php
class Connguoi{
    public $name;
    public $Age;
    public $gt;
    const sochan=2;
    public function an(){
    }
    public function GetSoChan(){
        return self::sochan;
    }
    public function noi($caunoi){
        return $this->GetSoChan().'-'.$caunoi;
    }
    public function GetName(){
        return $this->name;
    }
}
$connguoi=new Connguoi();
echo $connguoi->noi('hihi');
$connguoi->name='phong2';
echo $connguoi->name;