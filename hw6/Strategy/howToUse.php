<?php

$terminal = new PayTerminal();
$sum = 50;
$answer=$terminal->pay(new Qiwi, $sum);
echo $answer;
