<?php
include 'config.php';

$curp = $_POST['curp'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$domicilio = $_POST['domicilio'];
$rol = $_POST['rol'];
$contra = $_POST['contra'];

$sql = "INSERT INTO usuario (curp, nombre, telefono, sexo, domicilio, rol,contra) VALUES ('$curp', '$nombre', '$telefono', '$sexo', '$domicilio', '$rol', '$contra')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["mensaje" => "Usuario agregado correctamente"]);
} else {
    echo json_encode(["error" => "Error al insertar usuario"]);
}

$conn->close();
?>