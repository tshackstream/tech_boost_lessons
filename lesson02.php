<?php
// PHP/Laravel02

// 課題1
$a = 3;
$b = 7;

echo $a + $b;
echo "\n";

// 課題2

$array_month = [
	'1月', '2月', '3月', '4月', '5月', '6月',
	'7月', '8月', '9月', '10月', '11月', '12月',
];

echo $array_month[7];
echo "\n";

// 課題2 応用編
// $array_monthに1~12月を手で打つのは面倒なのでforを使って配列を代入する

// $array_monthを初期化
$array_month = [];

// $iが1~12の間処理する
for ($i = 1; $i <= 12; $i++) {
	$array_month[] = $i . '月';
}

echo $array_month[7];
echo "\n";

// 課題3

$hello = 'Hello, ';
$name = 'Takuya';
// シングルクォーテーションの中でシングルクォーテーションを表示したい場合は
// バックスラッシュ(\)を文字の前に置く
$world = '\'s World!';

echo $hello . $name . $world;
echo "\n";
// TIPS: ダブルクォーテーションを使うことで連結無しでも表示できる
// 変数を{}で括るのがお作法
echo "{$hello}{$name}{$world}";
echo "\n";

// 課題4
$tech_boost = 'tech ';
$tech_boost .= 'boost';

echo $tech_boost;
echo "\n";

// 課題5

/**
 * 元のソース
 *	$2018_calendar = {
 * 	　"January" => "1月",
 *　  "February" => "2月"、
 *　  "March" => "3月",
 *　  "April" => "4月",
 *　  "May" => "5月",
 *　  "June" = "6月",
 *　  "July" => "7月",
 *　  "August" => "8月",
 *　  "September" => "9月",
 *　  "October" => 10月,
 *　  "November" => "11月",
 *　  "December" => "12月"
 *	};
 *
 *	// 12月を表示する
 *	echo $2018_calendar[December];
 *
 * バグは6つ
 * ① 変数名が数字から始まっている
 *		変数名はアルファベットかアンダースコア(_)から始めます。もう一つありますが通常使わないので知らなくて良いです。
 * ② 配列が{}で括られている
 *		配列の定義は[]またはarray()で行います。
 * ③ 2月の後の区切りが全角の、になっている
 * 		配列の区切りはカンマ(,)です
 * ④ 6月が「キー = 要素」になっている
 * 		キーを持つ配列は「キー => 要素」で定義します。
 * ⑤ 10月が文字列になっていない
 * 		文字列の時はシングルクォーテーション(')かダブルクォーテーション(")で括ります。
 * ⑥ echo文で参照する配列のインデックスが文字列になっていない
 * 		文字列の時はシングルクォーテーション(')かダブルクォーテーション(")で括ります。
 */

// 修正後のコード
$calendar_2018 = [
	"January"   => "1月",
	"February"  => "2月",
	"March"     => "3月",
	"April"     => "4月",
	"May"       => "5月",
	"June"      => "6月",
	"July"      => "7月",
	"August"    => "8月",
	"September" => "9月",
	"October"   => "10月",
	"November"  => "11月",
	"December"  => "12月",
];

// 12月を表示する
echo $calendar_2018["December"];
echo "\n";
