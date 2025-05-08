<?php
include 'config.php';

$curp = $_POST['curp'];
$contra = $_POST['contra'];

$sql = "SELECT * FROM usuario WHERE curp='$curp'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    if ($contra === $row['contra']) { 
        echo json_encode(["success" => true, "mensaje" => "Inicio de sesión exitoso", "usuario" => $row]);
    } else {
        echo json_encode(["success" => false, "mensaje" => "Contraseña incorrecta"]);
    }
} else {
    echo json_encode(["success" => false, "mensaje" => "Usuario no encontrado"]);
}

$conn->close();
?>