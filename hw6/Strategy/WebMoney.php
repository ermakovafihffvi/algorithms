<?php 
include_once("IPaySystem.php");

class WebMoney implements IPaySystem{
    public function pay(float $sum){
        //оплата через webmoney, если всё ОК, то
        return "WebMoney aswered OK";
    }
}