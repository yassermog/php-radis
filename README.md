php-radis To connect to AWS Amazon Elasticache Redis  
By : Mohammed Yassse Moghrabiah  
محمد ياسر مغربيه
=========

in the AWS PHP sdk they talk about the command line client of radis 
http://docs.aws.amazon.com/AmazonElastiCache/latest/UserGuide/GettingStarted.ConnectToCacheNode.Redis.html

Connect AWS ElasticCash Radis with Php

    Configuring phpredis
    Using phpredis
    Frequently used PhpRedis Methods
    Example PHP Program using Redis

Configuring phpredis
------------------------------------
First, download "phpredis" for github repository 
https://github.com/nicolasff/phpredis

Once you’ve downloaded it, extract the files to phpredis directory. On ubuntu, install this extension as shown below.

cd phpredis
sudo phpize
sudo ./configure
sudo make
sudo make install

Now we have the phpredis extension installed. 
Copy and paste the content of “modules” folder to the php extension directory or use the following command in terminal.

sudo cp modules/redis.so {php-config–extension-dir}

Add the following lines in php.ini for your php installation.
extension = redis.so

Then You are ready to go : 

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
 }

referances 
http://www.thegeekstuff.com/2014/02/phpredis/
