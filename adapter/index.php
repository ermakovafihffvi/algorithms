<?php

spl_autoload_register(function ($classname){
    include_once("$classname.php");
});

$squareSide = 3;
$circlePerimeter = 5;

$circ = new Circle();
$sq = new Square();
//$c = $circ->getCircleSquare($circlePerimeter/pi());

$circleAdapter = new CircleAdapter($circ);
$squareAdapter = new SquareAdapter($sq);

$square = $squareAdapter->AreaS($squareSide);
$circle = $circleAdapter->AreaC($circlePerimeter);

?>
<p><?=$square?></p>
<hr>
<p><?=$circle?></p>