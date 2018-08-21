<?php
class DB{
    public function __construct()
    {
        try{
            $this->db=new PDO('mysql:host=localhost; dbname=pos', 'root', 'password');
        }catch (PDOException $e){
            die("Connection problem with database server.");
        }
    }
}