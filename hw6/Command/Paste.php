<?php
include_once("IAction.php");
 class Paste implements IAction{
     public function action(){
         //механизм вставки
     }

     public function unaction(){
        //механизм обратный к вставке
    }

    public function reaction(){
        //механизм обратный к повтору вставки
    }
 }