<?php

//* 変数と定数
$string = '変数';
$number = 5;
define('constant', '定数');
echo $string;
echo "\n";
echo $number;
echo "\n";
echo constant;

//* 連結演算子
$name1 = "sato" . "taro";
$name2 = "sato";
$last_name = "sato" ;
$first_name = "taro";
echo $name1;
echo "\n";
echo $name2 . "taro";
echo "\n";
echo $last_name . $first_name;


//* 配列
$people = array('Taro', 'Jiro', 'Saburo');
echo $people[0];
echo "\n";
echo $people[1];
echo "\n";
echo $people[2];

//* 連想配列
$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);

echo $people['person1'];
echo "\n";
echo $people['person2'];
echo "\n";
echo $people['person3'];

//* if文
$people = 'Saburo';

if ($people === 'Taro') {
    echo '太郎です';
} elseif ($people === 'Jiro') {
    echo '次郎です';
} elseif ($people === 'Saburo') {
    echo '三郎です';
} else {
    echo 'それ以外です';
}

//* swhitch文
$people = 'Saburo';
switch ($people) {
    case 'Taro':
        echo '太郎です';
        break;
    case 'Jiro':
        echo '次郎です';
        break;
    case 'Saburo':
        echo '三郎です';
        break;
}

//* while文
$count = 0;
while ($count <= 10) {
    echo $count;
    echo "\n";
    $count++;
}

$count = 0;
while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count;
    echo "\n";
    $count++;
}

// * for文
$people = array(
    'Taro', 'Jiro', 'Saburo'
);

for ($i = 0; $i < 3; $i++) {
    echo $people[$i];
    echo "\n";
}

// * forEach文
$people = array(
    'Taro', 'Jiro', 'Saburo'
);

foreach ($people as $person) {
    echo $person;
    echo "\n";
}

$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);

foreach ($people as $person => $name) {
    echo $person . "は" . $name . "です";
    echo "\n";
}


//* JSONの読み込み
$file = file_get_contents("./index.json");
$json = json_decode($file); //? JSON形式ではPHPをそのまま扱うことはできないので、デコードする必要がある

echo $json->name;
echo "\n";
foreach ($json->skills as $skill) {
    echo $skill;
    echo "\n";
}
echo $json->parent->father;
echo "\n";
echo $json->parent->mother;
echo "\n";

//* 関数
function hello()
{
    echo "Hello";
}

hello();