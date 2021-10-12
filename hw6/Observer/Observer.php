<?php
include_once("IObserver.php");
class Observer implements IObserver{
    private $name;
    private $stag;
    private $email;

    fubction __construct($name, $stag, $email){
        $this->name = $name;
        $this->stag = $stag;
        $this->email = $email;
    }

    public function getName(){
        return $name;
    }

    public function getEmail(){
        return $email;
    }

    public function getStag(){
        return $stag;
    }
}