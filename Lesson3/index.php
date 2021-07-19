<?php
// Task 1:
$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget risus rhoncus magna suscipit interdum et et metus";
$stringTrim = str_replace(' ', '', $string);
echo($stringTrim);

echo '</br>';

if ($string == strrev($string)){
    echo "Turned";
}else echo("Unturned");

// Task 2:

echo '</br>';

function reduce($v, $p) {
    return strlen($v) > strlen($p) ? $v : $p;
}

echo array_reduce(str_word_count($string, 1), 'reduce');

// Task 3:

echo '</br>';

print_r(mb_strlen( preg_replace('/[^A-ZА-ЯЁ]/u', '', $string), 'UTF-8'));
echo '</br>';
print_r(mb_strlen( preg_replace('/[^a-zа-яё]/u', '', $string), 'UTF-8'));

echo '</br>';

// Task 5:

$numbersEven = [1, 2, 3, 4, 5, 6, 12, 13, 14, 15, 7, 8, 9, 10, 11];

var_dump($numbersEven);
echo '</br>';

$sumEven = 0;
$sumUneven = 0;

foreach ($numbersEven as $index=>$value) {
    if ($value % 2 === 0) {
        $sumEven++;
    } else {
        $sumUneven++;
    }
}
echo '</br>';

echo 'sumEven = '.$sumEven;
echo '</br>';

echo 'sumUneven = '.$sumUneven;
echo '</br>';

// Task 6:
echo '</br>';

$sumNumbers = array_sum($numbersEven);
echo $sumNumbers;

echo '</br>';

$keyMax = array_key_last($numbersEven);
echo $keyMax;

echo '</br>';

foreach ($numbersEven as $index=>$value) {
    if ($value > $sumNumbers / $keyMax) {
        echo $value;
        echo '</br>';
    }
}

// Task 7:

sort($numbersEven);

echo '</br>';

var_dump($numbersEven);
echo '</br>';

echo $numbersEven[0];
echo '</br>';

echo $numbersEven[14];
echo '</br>';

// Task 8:

$letter = [
    5 => [
        0 => 'uno',
        1 => 'des',
        2 => 'tres'
    ],
    11 => [
        3 => 'quatro',
        4 => 'cinco',
        5 => 'seis'
    ]
];
print_r($letter);

echo '</br>';

$newLetter = array_merge($letter[5], $letter[11]);
print_r($newLetter);

echo '</br>';

//Task 9:
$amount = count($letter);
for ($i = 1; $i < $amount; $i++) {
    if ($amount % 2 === 0) {
        echo '</br>';
        return array_flip();
    }
}
var_dump();



