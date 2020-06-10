<?php

function sum($max) {
    
    $result = 0;
    
    for ($i=0;$i<=$max;$i++) {
        $result+=$i;
    }
    return $result;
}
echo sum(15).PHP_EOL;

function double($num) {
    echo $num*2;
}
echo double(10).PHP_EOL;

function f($a, $b) {
    echo $a + $b;
}
echo f(1, 2).PHP_EOL;

function multiplication($arr) {
    
    $result = 1;
    foreach ($arr as $a) {
        $result *= $a;
    }
    return $result.PHP_EOL;
}
echo multiplication(array(1,3,5,7,9));

function max_array($arr){

 $max_number = $arr[0];
 foreach($arr as $a){
    if ($max_number<$a) {
        $max_number = $a;
    }
 }

 return $max_number;
 }
//  strip_tags
 $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
//  タグを取り除く
echo strip_tags($text).PHP_EOL;
// 取り除かないタグを指定↓
echo strip_tags($text, '<a>').PHP_EOL;

// array_push
$number = array(1,3,5,7,9);

array_push($number, 2,4,6,8);

print_r($number);

$array1 = array("a","r","r");
$array2 = array("a","y");
$array3 = array("m","e",);
$array4 = array("r","g","e",);

$array = array_merge($array1,$array2,$array3,$array4);

print_r($array).PHP_EOL;

//  (1970 年 1 月 1 日 00:00:00 GMT) からの通算秒として返えす
echo time().PHP_EOL;

$time_stamp = mktime(23, 45, 0, 6, 10, 2020);

echo date('Y-m-d', $time_stamp);
