<?php
    class User {
        private $db;
        private $table;
        function __construct(){
            $this->table = 'users';
            $this->db = new mysqli('localhost','root','','user');
            
        }
        function getUser($id){
            $query = "SELECT * FROM $this->table WHERE id = $id";
            $user = $this->db->query($query)->fetch_assoc();
            return $user;
        }
    }