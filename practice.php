<?php
//* Companyという変数にconnie.coを代入し、Serviceという変数にTwitterを代入したものを文字列連結し、「connie.coはtwitteを運用しています」と出力してみましょう。
$company = "connie.co";
$service = "twitter";

echo $company . "は" . $service . "を運用しています";


//* fizzbuzzを実装してみましょう。
//* ルールとしては1 ~ 100 までを出力し、3の倍数の時は「 fizz 」、5の倍数の時は「 buzz 」、3の倍数かつ5の倍数の時は「 fizzbuzz 」と出力します。
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'fizzbuzz';
        echo "\n";
        continue;
    } elseif ($i % 3 === 0) {
        echo 'fizz';
        echo "\n";
        continue;
    } elseif ($i % 5 === 0) {
        echo 'buzz';
        echo "\n";
        continue;
    } else {
        echo $i;
        echo "\n";
    }
}


//* 三角形・四角形・台形の面積を求める関数を定義して、面積を求めてみましょう。
function getSquareArea($base, $height)
{
    return $base * $height;
}

function getTriangleArea($base, $height)
{
    return $base * $height / 2;
}

function getTrapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(5, 10) . "\n";
echo getTrapezoidArea(6, 5, 6);