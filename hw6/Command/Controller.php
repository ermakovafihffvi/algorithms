<?php

class Controller{
    public function submit(ICommand $command){
        $command->execute();
    }
}
