<?php

require_once "config/database.php";

class SaveInfo {

    private $conn;
    private $table;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
        $this->table = "technical_exam";
    }

    public function save() {
        $this->conn->query("INSERT into $this->table 
        
        ")
    }
}