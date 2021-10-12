<?php 
include_once("IPaySystem.php");

class Qiwi implements IPaySystem{
    public function pay(float $sum){
        //оплата через киви, если всё ОК, то
        return "Qiwi aswered OK";
    }
}