<?php

//1
function result($i){
    $result = $i*2;
    return $result;
}
echo result(1);

//2
function add($a,$b){
    $result = 0;
    $result = $a + $b;
    return $result;
}
echo add(1,1);

//3
function sum($arr){
    $result = $arr[0]*$arr[1]*$arr[2]*$arr[3]*$arr[4];
    return $result;
}
$arr = array(1,3,5,7,9);
echo sum($arr);

//4
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
    if ($a >=$max_number){
        $max_number = $a;
    //for($a = [0]; $a >= ; $a++);
    }
  }
  return $max_number;
}
$arr = array(1,5,6,3,8,2,6);
echo max_array($arr);
