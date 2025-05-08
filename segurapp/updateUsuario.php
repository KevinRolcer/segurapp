<?php
include 'config.php';

$curp = $_POST['curp'];
$telefono = $_POST['telefono'] ?? null;
$domicilio = $_POST['domicilio'] ?? null;
$contra = $_POST['contra'] ?? null; // Nueva columna para contraseña

// Construir la consulta dinámicamente
$updates = [];
if (!empty($telefono)) { $updates[] = "telefono='$telefono'"; }
if (!empty($domicilio)) { $updates[] = "domicilio='$domicilio'"; }
if (!empty($contra)) { $updates[] = "contra='$contra'"; }

if (!empty($updates)) {
    $sql = "UPDATE usuario SET " . implode(", ", $updates) . " WHERE curp='$curp'";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["mensaje" => "Usuario actualizado correctamente"]);
    } else {
        echo json_encode(["error" => "Error al actualizar usuario"]);
    }
} else {
    echo json_encode(["error" => "No se enviaron datos para actualizar"]);
}

$conn->close();
?>