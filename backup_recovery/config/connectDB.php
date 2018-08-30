<?php

    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "backup";        
        

    function select($Table){
        global $servername,
                $username,
                $password,
                $dbname;

        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }                                   
            $sql = "select * from ".$Table;
            $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $row1 = $row;
        }

     return $row1;
    }
    function create(){

    }
    function update(){

    }
    function delete(){

    }
    function put(){
        
    }
    
    // $conn->close();
?>