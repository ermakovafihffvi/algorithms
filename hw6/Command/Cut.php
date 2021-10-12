<?php
include_once("IAction.php");
class Cut implements IAction{
    public function action(){
        //механизм вырезания
    }
    public function unaction(){
        //механизм обратный к вырезанию
    }

    public function reaction(){
        //механизм обратный к повтору вырезания
    }
}