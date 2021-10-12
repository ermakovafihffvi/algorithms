<?php

$user = new Observer();
$hhru = new Observable();
$hhru->addObserver($user);
$hhru->notify();