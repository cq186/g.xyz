<?php
// $name="this is php";
header('content-type:application/json;charset=utf8');
// echo  $name;
// echo  phpinfo();
 

$st=time();

 
$result = array('code'=>'','sucess'=>true,'message'=>'ok',
    "data"=>array("serverTime"=>$st)
    
);

echo  json_encode($result);

 

