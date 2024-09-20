<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($num) {
  
    return $num *2;

}

echo double(5);

echo "\n";
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください

function sum($a,$b){

    return $a+$b;

}
echo sum(5,5);

echo "\n";
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
 
function array_kakezan($arr){
  $first = $arr[0];

  for($i = 0; $i < count($arr); $i++){
    $first *= $arr[$i];
  }
  return $first;
}
  echo array_kakezan(array(1, 3, 5 ,7, 9));

echo "\n";

//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする

    $max_number = $arr[0];

    foreach($arr as $a){

      // ここで配列の中の1番大きい値を探したい
      if ($max_number < $a){
        $max_number = $a;
      }
    }
  
    return $max_number;
  }

echo max_array([20,30,40,50]);

echo "\n";

//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

//strip_tags HTMLタグを削除
$str = "<h1>HTMLタグを削除</h1>"
      ."<p>削除しない</p>";

echo strip_tags($str,"<p>");

echo "\n";

//array_push　要素を配列の後ろに追加できる
$animal = ["dog","fox"];
array_push($animal,"cat");

  foreach($animal as $value){
    echo $value;
    echo "\n";
  }

$food = ["poteto","pasuta","pan"];

array_push($food,"kome","sarada");
var_dump($food);
//array_merge  配列をつなげて表示できる

$sports = ["vollyballl","table tennis","badominton"];

$sports2 = ["baseball","soccer","swimming"];

$result = array_merge($sports,$sports2);
var_dump($result);

//time現在時刻のタイムスタンプを得られる mktime指定日時のタイムスタンプを得られる

echo "現在のUnixタイムスタンプ:".time();

echo "\n";


$time = "指定した時間のUnixタイムスタンプ".mktime(9);
echo $time;
echo "\n";


//date 指定したフォーマットに沿って日時や時間を表示させる

$nawTime = time();
echo date("y-m-d h:i:s",$nawTime);
echo "\n";

$time = mktime(8,8,8);
echo date("y-m-d h-i-s",$time);
echo "\n";

$time = mktime(23,33,60);
var_dump(date("y年m月d日h時i分s秒",$time));
echo "\n";
