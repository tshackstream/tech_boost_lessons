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
		if ($a > $max_number) {
			$max_number = $a;
		}
	}

	return $max_number;
 }

$arr2 = [1, 3, 5, 7, 9];

echo max_array($arr2);
echo "\n";
