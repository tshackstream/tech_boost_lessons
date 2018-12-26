<?php

function sum(){

    // $result は結果を保存する変数
    $result = 0;

    // $i は 1　からはじまり $max より大きくなるまでループする
    for ($i = 1; $i <= 10; $i++){

        // $result に　$i を順番に足していく
        $result += $i;
    }

    return $result;
}

function () {

}


// function sum()の結果が欲しい
$sumResult = sum();

echo $sumResult * 2;
