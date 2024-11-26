<?php
    // define('HOST', 'localhost');
    // define('USER', 'root');
    // define('PASS', '');
    // define('BASE', 'cadastro');
    // $conn = new MySQLi(HOST,USER,PASS,BASE);

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'cadastro';
    
    $conn = new MySQLi($host, $user, $password, $database);