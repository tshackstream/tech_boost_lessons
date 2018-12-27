<?php
// PHP/Laravel02

// 課題1
$name = 'Takuya Sakai';

if ($name === 'Takuya Sakai') {
	echo 'あなたの名前です。';
} else {
	echo 'あなたの名前ではありません。';
}

echo "\n";

// 課題2
$sum = 0;
for ($i = 1; $i <= 10000; $i++) {
	$sum += $i;
}

echo $sum;
echo "\n";

// 課題3
$fruits = [
	'Apple',
	'Orange',
	'Banana',
	'Peach',
	'Grape',
];

foreach ($fruits as $fruit) {
	echo $fruit . "\n";
}

// 課題4

/**
 * バグ1 最初のコメントが閉じられていない
 * バグ2 echo $i に文末のセミコロンが足りない
 * バグ3 for文の$i < $endでは$iが100の時処理されない
 */

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){
	// 5で割り切れたら{}内を実行する
	if($i % 5 == 0) {
		echo $i . "\n";
  }
}