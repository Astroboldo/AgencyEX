<?php

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'wwwagencyexclusi_admin');
define('PASS', 'Agency*9947*');
define('DBNAME', 'wwwagencyexclusi_exclusivesite');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);