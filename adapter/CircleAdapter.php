<?php

include_once("ICircle.php");
include_once("Circle.php");

class CircleAdapter implements ICircle
{
    public Circle $circleSq;

    public function __construct(Circle $circleSquare)
    {
        $this->circleSq = $circleSquare;

    }

    /*public function getPerimeter(){
        return $circlePerimeter;
    }*/

    public function AreaC($circlePerimeter): float
    {
        $diagonal = $circlePerimeter / pi();
        $circle = $this->$circleSq->getCircleSquare($diagonal);
        //$circle = (new Circle())->getCircleSquare($diagonal); //И ТОЛЬКО ТАК ОНО РАБОТАЕТ!
        return $circle;
    }
}