<?php
 
$a = 3;
$b = 7;
 
/*
下の１行は各変数の中身を足し算する。
つまり、3 + 2 で 5 が cに入る。
*/
$c = $a + $b;
 
echo $c; //5がブラウザに表示される。
echo "<br>"; //改行しておく

$array_month = ['1月', "2月" ,"3 月" ,"4月" ,"5月" ,"6月" ,"7月" ,"8月" ,"9月" ,
"10月" ,"11月" ,"12月"];

echo $array_month[7];

echo "<br>"; //改行しておく

$hello = 'Hello,';
$name = 'naomi';
$world = 's World!';

echo $hello.$name.$world;

echo "<br>";

$tech_boost = 'tech';
$tech_boost .='boost';
echo $tech_boost;

echo "<br>";

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];














