<?php

// 課題1
function double($num) {
	return $num * 2;
}

// 6になる
echo double(3);
echo "\n";

// 課題2
function sum($num1, $num2) {
	return $num1 + $num2;
}

// 3になる
echo sum(1, 2);
echo "\n";

// 課題3
$arr = [1, 3, 5, 7, 9];
function multiply($array) {
	$result = 1;
	foreach ($array as $item) {
		$result *= $item;
	}

	return $result;
}
echo multiply($arr);
echo "\n";

// 課題4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
	$max_number = $arr[0];

	foreach($arr as $a){
		// それぞれの要素$aと$max_numberの大小を比較し
		// $aの方が大きかったら$max_numberを再代入(上書き)する
		if ($a > $max_number) {
			$max_number = $a;
		}
	}

	return $max_number;
 }

$arr2 = [1, 3, 5, 7, 9];

echo max_array($arr2);
echo "\n";

// 課題5

// strip_tags
// 文字列からhtmlタグを除去する
$html = 'test<br/>test';
$str = strip_tags($html);
echo $str;
echo "\n";

// array_push
// 配列に要素を追加する
$array = [1, 2, 3];
array_push($array, 4);
print_r($array);
echo "\n";

// array_merge
// 2つ以上の配列を結合する
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$merged_arr = array_merge($array1, $array2);
print_r($merged_arr);

// time
// 現在のUNIXタイムスタンプを取得する
echo time();
echo "\n";

// mktime
// 指定した時刻のタイムスタンプを取得する
echo mktime(12, 0, 0, 1, 1, 2019); //2019-01-01 12:00:00 のUNIXタイムスタンプ
echo "\n";

// UNIXタイムスタンプについて調べてみましょう！

// date
// 指定した形式で時刻を取得する
echo date('Y-m-d H:i:s'); // 現在日時
echo "\n";
echo date('Y-m-d H:i:s', strtotime('-1 days')); // 1日前
echo "\n";