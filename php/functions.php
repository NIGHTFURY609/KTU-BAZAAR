<?php
         require "config.php";
         
    function dbconnect(){
        $mysqli = new mysqli(  SERVER,  USERNAME, PASSWORD,  DATABASE);
        if($mysqli->connect_error !=0){
            return FALSE;
        }else{
            return $mysqli;
        }
    
    
    
    }
    function getCategories(){
        $mysqli = dbconnect();      
        $result = $mysqli->query("SELECT DISTINCT category FROM products");
        while($row = $result->fetch_assoc()){
            $categories[] = $row;
        }
        return $categories;
    }
