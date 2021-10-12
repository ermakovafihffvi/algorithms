<?php

include_once("IObservable.php");
class Observable implements IObservable{
    private $observers = [];

    public function addObserver(IObserver $observer){
        $this->$observers[] = $observer;
    }

    public function delObserver(IObserver $observer){
        foreach ($this->observers as &$obs) {
            if ($obs === $observer) {
                 unset($obs);
        	}
        }
    }
    public function notify(){
        foreach($this->observres as $obs){
            //механизм отправки сообщений
        }
    }
}