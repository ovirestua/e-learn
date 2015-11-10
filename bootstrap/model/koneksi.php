<?php
    try{
    	$db = new PDO("mysql:host=localhost; dbname=elearning", "root", "");
    }catch (PDOException $e){
    	echo $e->getMessage();
    }
?>    