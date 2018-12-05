<?php
function __autoload($className)
{
    if (file_exists($className . '.php')) {
        include_once $className . '.php';
    }
}
$nguoilon=new NguoiLon();
$tre=new TreCon();