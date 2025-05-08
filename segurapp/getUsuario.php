<?php
include 'config.php';

$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);
$usuarios = array();

while ($row = $result->fetch_assoc()) {
    $usuarios[] = $row;
}

echo json_encode($usuarios);
$conn->close();
?>