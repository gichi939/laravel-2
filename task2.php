<?php

$name = "中地　義一郎";

if ($name = "中地　義一郎") {
    echo "私は　あなたの名前　です".PHP_EOL;
} else {
    echo "あなたの名前ではありません".PHP_EOL;
}

$num = 0;
for ($i=0;$i<10000;$i++) {
    $num += $i;
}
echo $num.PHP_EOL;

$fruits = array("apple", "banana", "lemon", "peach", "grape");

$length = count($fruits);
$no = 0;

foreach ($fruits as $fruit) {
    echo $fruit." ";
    $no++;
    if ($no == $length) {
        echo PHP_EOL;
    }
}

$start = 1;

$end = 100;

for($i = $start; $i <= $end; $i++){

  if($i % 5 == 0){
    echo $i.PHP_EOL;
  }
}