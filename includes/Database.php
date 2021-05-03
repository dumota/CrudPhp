<?php

class Database{
    private $dbserver ="localhost";
    private $dbuser = "root";
    private $dbpassword ="";
    private $dbname = "playersdb";
    protected $conn;

    public function __construct(){
        try {
            $dsn ="mysql:host={$this->dbserver}; dbname={$this->dbname}; charset=utf8";
            $options = array(PDO::ATTR_PERSISTENT);
            $this->conn = new PDO($dsn, $this->dbuser, $this->dbpassword,$options);
        } catch (PDOexception $e) {
            echo "connection Error!".$e->getMessage();
        }
        
    }
}