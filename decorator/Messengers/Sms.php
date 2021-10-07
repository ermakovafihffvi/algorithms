<?php

use Decorator\DecoratorFiles\Decorator;

namespace Decorator\Messengers;

class Sms extends Decorator{
    public function send(): void{
        $this->message->send();
        //подробности отправки по sms
    }
}