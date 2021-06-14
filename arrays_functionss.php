<?php
/*$arr = array(10,20,30,'a',1);

print_r(array_sum($arr));*/


/*$str="welcome";


$arr=explode('o',$str);
print_r($arr);*/

/*
$arr=array(1,2,3);

        echo array_product($arr);*/


/*$arr = array(9, 1,2013);


$str = implode('/',$arr);

print_r($str);*/

/*
$input = array(4, 3, 6, 5, 8, 7, 2);

function oddCmp($input)

{

    return ($input & 1);

}


function evenCmp($input)

{

    return !($input & 1);

}

$odd = array_filter($input, "oddCmp");

$even = array_filter($input, "evenCmp");

$odd = array_values($odd);

$even = array_values($even);

print"Odd array :\n";

print_r($odd);

print"\nEven array :\n";

print_r($even);*/


/*$color = array('white', 'green', 'red');

foreach ($color as $c){
    echo $c." ";
}
sort($color);
echo "<ul>";

foreach ($color as $x){
    echo "<li>". $x ."</li>";

}
echo "</ul>";*/


$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

$arr=explode(',',$month_temp);
print_r($arr);
$total=0;
  $arr_length= count($arr);
foreach ($arr as $a){
    $total+=$a;
}

$avgs=$total/$arr_length;

$Uniques_elements=array_unique($arr);
sort($Uniques_elements);
for ($i=0;$i<5;$i++){
    $first=$Uniques_elements[$i];
    print_r($first);

}


