<?php
echo 'hello php!';

//1
$a = 3;
$b = 7 ;
$result = $a + $b;
echo $result;
//2
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];
//3
$hello = "Hello,";
$name = "Nagisa";
$world = "'s World!";
echo $hello . $name . $world;
//4
$tech_boost = 'tech';
$tech_boost .= 'boost';
echo $tech_boost;
//5
$calendar_2018 = [ //$の後ろが数字 //かっこの仕様が違う
  "January" => "1月",
  "February" => "2月", //カンマが全角
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",//「>」がない
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月", //「"」がついていない
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"]; //「"」がついていない