<?php

namespace App\Database;
use App\Database\ISqlConnect;
use App\config;

class MySqlConnect implements ISqlConnect {
    private $db;
    private $query;

    public function __construct(){
        $this->db=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        
    }
   public function connect(){
    
   }
    // add querry statement
    public function addQuerry($query){
        $this->query = $query;
    }

    // use with statement select
    public function executeQuery(){
        $result = mysqli_query($this->db, $this->query);

        if(!$result){
            echo "FAIL when execute!";
            exit();
        }

        return $result;
    }


    // use with statement insert, delete, update,..
    public function updateQuery(){
        $result = mysqli_query($this->db, $this->query);

        if(!$result){
            echo "FAIL when update!";
            exit();
        }

        // no return result
    }

}
