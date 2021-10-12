<?php

class PayTerminal{
    public function pay(IPaySystem $system, $sum){
        return $system->pay($sum);
    }
}