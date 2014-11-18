<?php

require 'MyRadis.php';

echo '<pre>';

$redisObj = new MyRadis(); 
$jsonValue="Mohammed Yasser Moghrabiah From Syria";
$jsonValue= date("Y-m-d H:i:s");   
var_dump($jsonValue);

$redisObj->setValueIfNotExist( 'TestKey2', $jsonValue, 10);

// Fetching value from redis using the key. 
$val = $redisObj->getValueFromKey( 'TestKey2' ); 
//  Output:  the json encoded array from redis 
echo $val;


// Unsetting value from redis
// $redisObj->deleteValueFromKey( $key );
