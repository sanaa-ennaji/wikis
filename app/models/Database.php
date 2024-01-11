<?php
require '../config/config.php';
class Database {
  private $host = HOST;
  private $user = USER;
  private $password = PASS ;
  private $dbname = DB ;

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
// a function that check if the connection exists or not no matter how object we creat a new object out of class we still get the same connection 
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