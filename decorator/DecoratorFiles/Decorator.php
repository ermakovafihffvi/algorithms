<?php

use Decorator\Contract\IMessenger;

namespace Decorator\DecoratorFiles;

abstract class Decorator implements IMessenger{
    protected $message = null;

    public function __construct(IMessenger $message){
        $this->message = $message;
    }
}