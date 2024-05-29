<?php
define('hostname', 'localhost');
define('username', 'root');
define('password', '');
define('dbname', 'pchs');

$conn = mysqli_connect(hostname, username, password, dbname);

if (!$conn) {
    die("Connection failed: ");
}
