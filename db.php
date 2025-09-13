<?php
$host="localhost";
$database="liquor";
try{
    $pdo= new PDO("mysql:host=$host;dbname=$database;","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Error: ",$e->getMessage();
}
?>