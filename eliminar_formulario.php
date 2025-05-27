<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];

    $sql = "DELETE FROM formulario_principal WHERE id = ?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirigir a la vista con los datos actualizados
        header("Location: vista_formulario.html");
        exit();
    } else {
        echo "Error al eliminar el registro.";
    }

    $stmt->close();
}
?>
