<?php


class Circle{
   public function getCircleSquare(float $diagonal)
   {
       $square = (pi() * $diagonal^2)/4;

       return $square;
   }
}