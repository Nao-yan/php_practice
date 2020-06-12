<?php

$name = 'Yname';

if ($name == 'Yname') {
  echo "あなたの名前です";
} else if ($naem != 'Yname'){
  echo "あなたの名前ではありません";
}

echo "<br>"; //改行しておく


$total = 0;
echo $total;
//=> 0 と表示される。

// $iが0から始まり、$iが10000以下の間繰り返し処理を行う。
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

echo "<br>"; //改行しておく

$fruits  = array("app", "paine", "banana", "orenji", "biwa");
// fruits  から一つずつ要素を取り出して、$frut に代入される

foreach($fruits as $frut){
  echo "要素は" . $frut;
  echo "\n";
}

echo "<br>"; //改行しておく

// for文の始めの値を定義する
$start = 1;
// for文の終わりの値を定義する
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
