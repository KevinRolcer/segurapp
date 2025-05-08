<?php
$config = parse_ini_file('config.ini', true);

$servername = $config['database']['host'];
$username = $config['database']['user'];
$password = $config['database']['password'];
$database = $config['database']['dbname'];

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
echo "Conexión exitosa!";
?>