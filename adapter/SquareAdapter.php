<?php

spl_autoload_register(function ($classname){
    include_once("$classname.php");
});

class SquareAdapter implements ISquare{
    public $squareSquare;

    public function __construct(Square $squareSquare){
        $this->squareSquare = $squareSquare;
    }

    public function AreaS(int $squareSide): float{
        $diagonal = $squareSide * sqrt(2);
        $square = $this->$squareSquare->getSquareSquare($diagonal);
        return $square;
    }
}