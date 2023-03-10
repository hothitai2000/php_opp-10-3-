<?php
class Person{
    public $Name;
    public $Address;
    public $Email;
    public $Phone;
    public function _construct($Name,$Address,$Email,$Phone){
        $this->Name=$Name;
        $this->Address=$Address;
        $this->Email=$Email;
        $this->Phone=$Phone;
    }
    public function hienthi(){
        echo "{$this->Name} {$this->Address}";
        echo "{$this->Email} {$this->Phone}";
    }
}
class employe extends Person{
    public $Degree;
    public function __construct($Name,$Address,$Email,$Phone,$Degree)
    {
        $this->Name=$Name;
        $this->Address=$Address;
        $this->Email=$Email;
        $this->Phone=$Phone;
        $this->Degree=$Degree;
    }
    public function hienthi(){
        echo " $this->Name <br>";
        echo " $this->Address <br>";
        echo " $this->Email <br>";
        echo " $this->Phone <br> <br>";
    }
}
class Customer extends Person{
    public $Loaikh;
    public function __construct($Name,$Address,$Email,$Phone,$Loaikh)

    {
        $this->Name=$Name;
        $this->Address=$Address;
        $this->Email=$Email;
        $this->Phone=$Phone;
        $this->Loaikh=$Loaikh;
    }
    public function hienthi(){
        echo " $this->Name <br>";
        echo " $this->Address <br>";
        echo " $this->Email <br>";
        echo " $this->Phone <br>";
    }
}
$employe= new employe("Tai","Phu Thieng","hothitai02032003@gmail.com","0362271203","Gioi");
$employe->hienthi();
$Customer= new Customer("Tam","Phu Thieng","hothitam02032003@gmail.com","0362271203","Gioi");
$Customer->hienthi();
?>            