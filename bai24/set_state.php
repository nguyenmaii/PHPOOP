<?php
class ConNguoi
{
    public $name = "Vũ Thanh Tài";
    public $age = 21;
    public function __debugInfo()
    {
        return [
            'name' => $this->name,
        ];
    }
}
$connguoi = new ConNguoi();
var_dump($connguoi);