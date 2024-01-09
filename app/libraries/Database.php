<?php

class Database {
  private $host = HOST;
  private $user = USER;
  private $password = PASS ;
  private $dbname = DB ;

 private static $instance;
protected $pdo;
  private function __construct() {
    try {
        $this->pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
public static function getInstance() {
    if (!self::$instance) {
        self::$instance = new self();
    }
    return self::$instance;
}
public function getConnection(){
    return $this->pdo;
}

} 
 







?>