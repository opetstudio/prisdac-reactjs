<?php
Class DbConnection{
    function getdbconnect(){
        $conn = mysqli_connect("localhost","opeb1723_adra","Adra123!","opeb1723_adra_db") or die("Couldn't connect");

        return $conn;
    }
}
?>