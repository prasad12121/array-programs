<?php
/*
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

  //$arr=array_map('strtoupper',$Color);
$arr=array_change_key_case($Color,CASE_LOWER);
$arr1=  array_map('strtolower',$arr);
$arr2=implode(',',$arr1);
print_r($arr2);*/


/*echo implode(",", range(200, 250, 4)) . "\n";*/

/*$my_array = array("abcd","abc","de","hjjj","g","wer");

$arr=array_map('strlen',$my_array);

print_r(max($arr));*/

$ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
    "United Kingdom hkjhad jkhsadkjh ajkdhkjash " => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");


 $arr=array_keys($ceu);
    print_r(max($arr));






















