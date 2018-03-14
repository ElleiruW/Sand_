<?php
namespace Service;

class DBConnector
{
    private static $config;
    private static $connection;
    
    
    public static function setConfig(array $config){
        self::$config=$config;
        
    }
    private static function createConnection(){
        $dsn = sprintf(
            '%s:host=%s;dbname=%s',
            self::$config['driver'],
            self::$config['host'],
            self::$config['dbname']
         );
        self::$connection= new \PDO(
            $dsn,
            self::$config['dbuser'],
            self::$config['dbpass']
         );
        
        /**
         * Create a connection
         * create a live connection with the database and store it
         * internally
         * @return void
         * 
         * Use $this to refer to the current object. Use self to refer to the current class. In other words, use  $this->member for non-static members, use self::$member for static members.
         * 
         */
    }
    
    public static function getConnection(){
        if(!self::$connection){
            self::createConnection();
        }
        return self::$connection;
            
        /**
         * Get connection
         * Return the current existing connection
         * if not exist
         * @return \PDO
         */
    }
}

