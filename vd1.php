<?php
class Student {
    private $name= "Tai" ;
    public function setName ($newName){
        $this->name = $newName;
    }
    public function getName(){
        return $this -> name . "<br/ >";
    }
}
$obj = new Student ();
$obj->setName('Tam');
 echo $obj-> getName();
?>
