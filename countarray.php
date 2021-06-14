<?php
/*function count_array_values($my_array, $match)
{
    $count = 0;

    foreach ($my_array as $key => $value)
    {
        if ($value == $match)
        {
            $count++;
        }
    }

    return $count;
}

$colors = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red");

echo "\n"."Red color appears ".count_array_values($colors, "Red"). " time(s)."."\n";
*/


/*
function count_arr_values($arr,$match){
    $count=0;

    foreach ($arr as  $key=>$value){
        if ($value==$match){
            $count++;
        }
    }

    return $count;
}
$colors = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red");

$arr1=count_arr_values($colors,"Red");
print_r($arr1);*/

/*function array_uniq($arr,$match){
$count=0;
    foreach ($arr as $key=>$value){

        if($value == $match) $count++;

        if(($count>1) && ($value==$match)){
            echo $value;
           print_r($count);
           unset($arr[$key]);
        }

    }

    return array_filter($arr);
}

$numbers = array(4, 5, 6, 7, 4, 7, 8);

print_r(array_count_values($numbers, 7));*/

/*
function count_array_values($arr,$match){

    $count=0;
    foreach ($arr as  $key=>$value){

        if($value==$match){
            $count++;
        }

    }
    return $count;



}



$colors = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red");

echo "\n"."Red color appears ".count_array_values($colors, "Yellow"). " time(s)."."\n";*/

/*
. Write a PHP script to trim all the
elements in an array using array_walk function.*/


/*$colors = array( "Red ", " Green", "Black ", " White ");

$a=array_map('trim',$colors);

foreach ($a as $key=>$value){
  print_r($a[$key]."\n");
}/nt_r($colors);
//pri*

/*array_walk($colors,function (&value)
{
    foreach ($colors as $b){
        var_dump($b);
    }

});*/


/*foreach($colors as $key => $value)
{
  //  $arr=trim($value);

    array_walk($colors,create_function('&$val','$val=trim($val);'));
    print_r($colors[$key]);
}*/

/*
$colors = array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black');
 $given_value = 'Black';*/
//print_r($colors);

/*$new_array=array_filter($colors,function ($element) use ($given_value){
   return  ($element!=$given_value);
});*/
/*
function string_range($str1)
{
    preg_match_all("/([0-9]{1,2})-?([0-9]{0,2}) ?,?;?/", $str1, $a);
    $x = array();

   /* echo "<pre>";
    print_r($a[1]);
    echo "<pre>";

    echo "<pre>";
    print_r($a[2]);
    echo "<pre>";*/
    /*foreach ($a[1] as $k => $v) {


        $x = array_merge($x, range($v, (empty($a[2][$k]) ? $v : $a[2][$k])));
    }
    return ($x);
}*/
/*
$test_string = '1-2 18-20 9-11';
$s1=string_range($test_string);

$a22=implode(',',$s1);
print_r($a22);

*/

/*Write a PHP program to convert word to digit.*/


function word_digit($word) {
    $warr = explode(';',$word);
    $result = '';
    foreach($warr as $value){
        switch(trim($value)){
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;
        }
    }
    return $result;
}

echo word_digit("zero;three;five;six;eight;one")."\n";
echo word_digit("seven;zero;one")."\n";
?>


















