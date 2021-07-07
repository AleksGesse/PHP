<?php
 // Task 1: Create associative array with 10 elements

$auto = [
    "Acura"=>"CDX",
    "Mercedes"=>"CLA",
    "BMW"=>"435",
    "Lexus"=>"RC F",
    "Jaguar"=>"XFR",
    "Lotus"=>"Eclat",
    "Mini"=>"Hatch",
    "Proton"=>"Inspira",
    "GMC"=>"Sierra",
    "Dodge"=>"Caliber"];

// Task 2: Using 'foreach' display all elements on the screen

foreach ($auto as $item){
    echo $item, '</br>';
};

echo '</br>';

// Task 3: Using 'for' create an array up from 20 elements with the help of 'rand()'
$numb = [];
for ($i = 0; $i < 20; $i++){
    $arr[] = rand();
};
print_r($arr);

echo '</br>';
echo '</br>';

// Task 4: Using previous array, display all elements that are multiple 3 and 5 simultaneously
$number = [];
for ($i = 0; $i < 20; $i++){
    if ($arr[$i] % 3 == 0 && $arr[$i] % 5 == 0) {
        $number[] = $arr[$i];
    }
}
print_r($number);
