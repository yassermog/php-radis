<?php

// by Mohammed Yasser Moghrabiah
class MyRadis
{
  public $redisObj;
  public $host = 'ssss.zkdojs.0001.usw2.cache.amazonaws.com';
  public $port = 6379;

   public function __construct()
  {
     echo '<br> in constractor .........';
     $this->redisObj = new Redis();
     echo $this->host;
     echo $this->port;
     
     $this->openRedisConnection($this->host, $this->port);
  }
 
  function openRedisConnection( $hostName, $portnumber){ 
  	// Opening a redis connection
        echo '<br> opining a connection ..........';
  	$this->redisObj->connect( $hostName, $portnumber ); 
       
  } 

  function setValueFromKey( $key, $value){ 
  	try{ 
		// setting the value in redis
                echo '<br> set a value ..........'.$key;
  		$this->redisObj->set($key,  $value );
  	}catch( Exception $e ){ 
  		echo $e->getMessage(); 
  	} 
  } 
  
  function setValueWithTtl( $key, $value, $ttl ){ 
  	try{ 
		// setting the value in redis
                echo '<br> set a value ..........'.$key.' with TTL '.$ttl;
  		$this->redisObj->setex( $key, $ttl, $value );
  	}catch( Exception $e ){ 
  		echo $e->getMessage(); 
  	} 
  } 
  
    function setValueIfNotExist( $key, $value, $ttl ){ 
  	try{ 
                if(!$this->redisObj->exists($key)){		
                    // setting the value in redis
                    echo '<br> set a value ..........'.$key.' with TTL '.$ttl;
                    $this->redisObj->setex( $key, $ttl, $value );
                }
                else{
                    echo '<br> value already exist..........'.$key;
                }
       
  	}catch( Exception $e ){ 
  		echo $e->getMessage(); 
  	}

  } 


  function getValueFromKey( $key ){ 
  	try{ 
		// getting the value from redis
             echo '<br> get a value ..........'.$key;
  		return $this->redisObj->get( $key);
  	}catch( Exception $e ){ 
  		echo $e->getMessage(); 
  	} 
  } 

  function deleteValueFromKey( $key ){ 
  	try{ 
  		
		// deleting the value from redis
  		$this->redisObj->del( $key);
  	}catch( Exception $e ){ 
  		echo $e->getMessage(); 
  	} 
  } 
  
}
 