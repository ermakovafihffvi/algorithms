<?php
$copy = new Copy();
$copyCommand = new Command($copy);

$control = new Controller();
$control->submit($copyCommand);
