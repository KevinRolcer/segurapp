<?php
include 'config.php';

$curp = $_POST['curp'];

$sql = "DELETE FROM usuario WHERE curp='$curp'";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["mensaje" => "Usuario eliminado correctamente"]);
} else {
    echo json_encode(["error" => "Error al eliminar usuario"]);
}

$conn->close();
?>