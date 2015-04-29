<?php
    require_once(__DIR__ . "/database.php");
    session_start();
    
    $path = "/Todo2/";
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "Todo2";
    
    if(!isset($_SESSION["connection"])) {
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }