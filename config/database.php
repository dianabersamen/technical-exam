<?php

class Database {
    private $host = "localhost";
    private $db_name = "technical_exam";
    private $user = "root";
    private $pass = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->user, $this->pass);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}