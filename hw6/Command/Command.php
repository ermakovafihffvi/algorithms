<?php
include_once("ICommand.php");

class Command implements ICommand{
    private $actionName;

    function __construct(IAction $actionName){
        $this->actionName = $actionName;
    }

    public function execute(){
        $this->actionName->action();
    }

    public function undo(){
        $this->actionName->unaction();
    }

    public function repeat(){
        $this->actionName->reaction();
    }
}