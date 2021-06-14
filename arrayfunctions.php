<?php
/*echo "hiii";

$keys = array('golden', 25, 560, 'age');
$value = array(5,10);
//$a=array_fill_keys($keys,"prasad");
// $a= array_fill_keys($keys,$value);*/


//$array = array("aakash" => "rani", "rishav" => "sristi","gaurav" => "riya", "laxman" => "rani");
/*$array = array("a" => 1, "b" => 1, "c" => 2);

$a=array_flip($array);

 echo "<pre>";
print_r($a);
echo "<pre>";*/
/*$b = array("anti" => 1.42, "biotic" => 12.3, "charisma" => 73.4);
  $a=array_sum($b);
  print_r($a);*/
/*
function myfun($value,$key){

    echo "The key $key has the value $value \n";
}


$arr1=array("x"=>"india", "y"=>"Pakistan");
$arr2=array($arr1, "1"=>"China", "2"=>"Japan");

array_walk_recursive($arr2,"myfun");*/


// PHP program to demonstrate the use of rsort() function
// sorts the string case-sensitively
//$array = array("geeks", "Raj", "striver", "coding", "RAj");

// sorting function used, sorts the string case-sensitively
/*rsort($array, SORT_STRING | SORT_FLAG_CASE);

// prints the sorted array
print_r($array);*/
/*function comparatorFunc( $x, $y)
{


    echo "x is".$x."Y is".$y."</br>";
    // If $x is equal to $y it returns 0
    if ($x== $y)
        return 0;

    // if x is less than y then it returns -1
    // else it returns 1

        $b=$x<$y ? -1:  1;

        return $b;
}

// Input array
$arr= array(2, 9, 1, 3, 5);

usort($arr, "comparatorFunc");

print_r($arr);*/

/*$str = "GeeksforGeeks";



$res=addcslashes($str,'a..k');
print_r($res);*/


/*$s= "Hello Geeks! \n best wishes";
/*
echo chop($s,"!t");

$OriginalString = "Hello, How can we help you adjkllkj asldkjklasjd lkasdjklajsd?";

print_r(explode(' ',$OriginalString,4));
*/
/*$string = "GeeksforGeeks";
print_r(count_chars($string,1));*/

/*$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach ($ceu as $key=>$value){

  echo  "The capital of $key is $value.</br>";

}*/

/*function myfun($value,$key){
    echo "$key : $value"."\n";
}

$a = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{ 
"Publisher": "Little Brown"
 }
  }';*/
/*

$j=json_decode($a,true);
//print_r($j);

array_walk_recursive($j,"myfun");
*/
/*
$original = array( '1','2','3','4','5' );

array_splice($original,3,0,"$");

print_r($original);
foreach ($original as $x)
    echo $x;

*/
/*$a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
//asort($a);
//ksort($a);
//arsort($a);
krsort($a);
print_r($a);*/
/*
$array1 = array(array(77, 87), array(23, 45));
$array2 = arrayarray("w3resource", "com");
$b=array_merge_recursive($array1,$array2);


$c=json_encode($b);
print_r($*/

/*$a=array("abcd","abc","de","hjjj","g","wer");
$new_array=array_map('strlen',$a);

echo "The shortest array length is " . min($new_array) .". The longest array length is " . max($new_array).'.';

*/



/*
$a = array(1 => 'one', 2 => 'two', 3 => 'three');
unset($a[2]);
print_r($a);*/
/*

$array = array(1, 2, 3, 4, 5);
echo "<pre>";
print_r($array);

        foreach ($array as $i=> $value){
            unset($array[$i]);
        }
echo "<pre>";
print_r($array);
$array[]=6;

echo "<pre>";
print_r($array);

//$array = array_values($array);

        $array=array_values($array);
$array[] = 7;*/
/*
$a = array(1 => 'one', 2 => 'two', 3 => 'three');
unset($a[2]);

$a=array_values($a);*/
//echo "<pre>";
//print_r($array);
/*$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as &$color) {
    $color = strtoupper($color);
}
unset($color);

print_r($colors);

*/

/*$array = [1, 2, 3, 4, 5];

foreach ($array as $k => &$v){
    if ($k >= 3){
        unset($array[$k]);
    }
}

print_r($array);
*/
/*
$a=array();

//$a['a']='';
$a['a']=array();
$a['a']['b']='';*/

//$a['a']['b']='';
/*
$arr=array(12,32,2,23,23,23);
foreach ( $arr as $key => &$value )
{
    $value = 1;
}

// without next line you can get bad results...
unset($value);

$value = 159;
print_r($value);*/

/*$array=array_merge(array('All'),range('a','z'));
echo "<pre>";
print_r($array);
*/

/*
$a1 = array( "a" => 0, "b" => 1 );
$a2 = array( "aa" => 00, "bb" => 11 );

$together = array( $a1, $a2 );

foreach( $together as $key => $value ) {

    $together[$key]["c"] = 3 ;

}
echo "<pre>";
print_r( $together );*/
/*
class foo
{
    function do_foo()
    {
        echo "Doing foo.";
    }
}
$bar=new foo();

$bar->do_foo();

*/

/*class myNumber
{
    public $value;
}

$arrayOfMyNumbers = array();

for( $i = 0; $i<3; $i++ ) {
    $arrayItem = new myNumber();
    $arrayItem->value = $i;
    $arrayOfMyNumbers[] = $arrayItem;
}

echo "<pre>";
print_r($arrayOfMyNumbers);*/

/*
$a='11';
if($a====11) {
    echo 'asdasd';
}else{
    echo "sad";
}*/




$a=2;
$a++ + ++$a;

echo $a;
?>






























