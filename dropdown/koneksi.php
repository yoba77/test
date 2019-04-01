<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'pegawai';

$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);

?>