<?php
interface IPaySystem{
    abstract function pay(float $sum);
}