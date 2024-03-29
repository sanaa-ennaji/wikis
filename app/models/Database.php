<?php

class Database {
  private $host ='localhost' ;
  private $user = 'root';
  private $password = 'new_password' ;
  private $dbname = 'wiki' ;

 private static $instance;
 protected $pdo;


private function __construct() {
    try {
        $this->pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname , $this->user, $this->password);
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

// $dbInstance1 = Database::getInstance();
// $pdo1 = $dbInstance1->getConnection();

// $dbInstance2 = Database::getInstance();
// $pdo2 = $dbInstance2->getConnection();

// echo "Singleton Pattern:\n";
// var_dump($pdo1 === $pdo2);



?>