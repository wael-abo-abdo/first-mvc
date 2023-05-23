<?php

class Dbh{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;


    public function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "testdb";
        $this->charset = "utf8mb4";

        // $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname, $this->charset);
        // return $conn;

        // instead of mysqli connect, use PDO connect:
        // but first we're gonna use the try_catch method

        try {
        // first... the dsn(data sourse name):
        $dsn="mysql:host=".$this->servername.";
                  dbname=".$this->dbname.";
                  charset=".$this->charset;
        $pdo= new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //this takes the error message and shows it inside the website
        } catch (PDOException $e) {
            echo"Connection Failed:!!! ".$e->getMessage();
        }
        
        
    }
}