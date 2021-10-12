<?php 
include_once("IPaySystem.php");

class Yandex implements IPaySystem{
    public function pay(float $sum){
        //оплата через яндекс, если всё ОК, то
        return "Yandex aswered OK";
    }
}