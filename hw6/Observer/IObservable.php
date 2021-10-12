<?php
interface IObservable{
    abstract function addObserver();
    abstract function delObserver();
    abstract function notify();
}