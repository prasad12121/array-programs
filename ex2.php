<?php
/*$apples = 10;
for ($i = 0; $i < 10; ++$i) {
    echo "<pre>";
    echo 'I have ' . $apples--. " apples. I just ate one.\n";
}*/
/*$i = "a";
while ($i < "c") {
    echo $i++;
}*/
/*
$arr = [4,2,1,9];

usort($arr,function ($a,$b){

    return $a <=> $b;
});
print_r($arr);*/


/*$a = 'How are you?';

if (str_contains($a,'are')) {
    echo 'true';
}*/

$a = 'How are you?';
if (preg_match('/\bare\b/', $a)) {
    echo 'true';
}