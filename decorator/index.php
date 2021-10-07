<?php

use Decorator\Contract\IMesasge;
use Decorator\Message\Message;
use Decorator\Messengers\SMS;
use Decorator\Messengers\Email;

$messageSMS = new SMS(new Message);
$messageSMS->send();

$messageEmail = new Email(new Message);
$messageEmail->send();

$messageSmsEmail = new Email(new SMS(new Message));
$messageSmsEmail->send();

$messageAll = new Email(new SMS(new Message));
$messageAll->send();