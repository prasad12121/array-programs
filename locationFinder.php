<?php


$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

$res=curl_exec($ch);


/*$json = '[
  {"name": "abaneel", "age" : 23},
  {"name": "john", "age" : 32},
  {"name": "Dev", "age" : 22}
]';*/


$your_string="";
$multiple = json_decode($res, true);
$ress=implode(', ',$multiple);

$re=$ress;
print_r($re);


/*foreach($multiple as $key=>$value) {


    //$your_string.=implode(', ',$keys);
    $your_string.=$multiple[$key]=$value."</br>";

   // $implode[] = implode(', ', $single);

   // echo implode(', ', $implode);
}
echo $your_string;*/

//   print_r($res);

  /*  if($res->status=='success'){
       echo "country: ".$res->country.'<br/>';
        echo "country: ".$res->regionName.'<br/>';
        echo "city: ".$res->city.'<br/>';
        echo "zip: ".$res->zip.'<br/>';

    }*/