<?php

interface ICommand{
    abstract function execute();
    abstract function repeat();
    abstract function undo();
}