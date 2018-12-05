<?php
class ParentClass{
    public function GetClass(){
        return 'Parent';
    }
}
class ChildClass extends ParentClass{
    var $name='Child';
    function GetClass(){
        return 'Child';
    }
    function GetMethod()
    {
        return $this->GetClass();
    }
    function GetParentMethod(){
        return parent::GetClass();
    }
}
$cl=new ChildClass();
echo $cl->GetMethod();
echo $cl->GetParentMethod();