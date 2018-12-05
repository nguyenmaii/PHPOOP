<?php
class Personel
{
    private $name = 'vu van A';
    private $age = 32;
    public function getPersonel(){
        return $this->name.'-'.$this->age;

    }
}