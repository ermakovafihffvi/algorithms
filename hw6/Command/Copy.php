<?php
include_once("IAction.php");
class Copy implements IAction{
    public function action(){
        //механизм копирования
    }

    public function unaction(){
        //механизм обратный к копированию
    }

    public function reaction(){
        //механизм обратный к повтору копированию
    }
}