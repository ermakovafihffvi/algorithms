<?php

include 'randArray.php';
include 'LinearSearch.php';
include 'BinarySearch.php';
include 'InterpolationSearch.php';

const NUM = 8;

$arr = getSortRandArray();

echo "<pre>"; print_r($arr); echo "</pre>";

echo "Ищем число ".NUM;
echo "<br>";

echo "Линейный поиск".PHP_EOL;
echo linearSearch($arr, NUM).PHP_EOL;
echo "<br>";

echo "Бинарный поиск".PHP_EOL;
echo binarySearch($arr, NUM).PHP_EOL;
echo "<br>";

echo "Интерполяционный".PHP_EOL;
echo interpolationSearch($arr, NUM);
echo "<br>"; echo "<hr>";

function nonrec($arr, $num = NUM){
    $answer = array();
    (int) $b = -1;
    $i = linearSearch($arr, $num);
    while(!is_null($i)){
      $b = (int) $b + (int) $i + 1;
      echo "$i";
      $answer[] = $b;
      $arr = array_slice($arr, $i+1);
      $i = linearSearch($arr, $num);
    }
    return $answer;
  }

echo "Поиск всех индексов".PHP_EOL;
print_r(nonrec($arr));
echo "<br>"; echo "<hr>";
