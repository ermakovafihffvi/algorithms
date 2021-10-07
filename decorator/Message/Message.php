<?php

use Decorator\Contract\IMessage;

namespace Decorator\Message;

class Message implements IMessage
{
    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function send(): void
    {
        //oтправкa сообщения
    }
} 