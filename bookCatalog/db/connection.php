<?php

$dbSetup = "mysql:host=localhost;dbname=bookCatalog;charset=utf8";

$dbLogin = "root";
$dbPass = "";

$dbErrMode = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$conn = new PDO($dbSetup, $dbLogin, $dbPass, $dbErrMode);


?>