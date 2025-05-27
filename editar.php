<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $estadoCuenta = $_POST["estado_cuenta"];
    $numeroCuenta = $_POST["numero_cuenta"];
    $moneda = $_POST["moneda"];
    $fechaApertura = $_POST["fecha_apertura"];
    $fechaVencimiento = $_POST["fecha_vencimiento"];
    $montoActual = $_POST["monto_actual"];
    $companhia = $_POST["companhia"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];

    $sql = "UPDATE formulario_principal SET 
        estado_cuenta = ?, 
        numero_cuenta = ?, 
        moneda = ?, 
        fecha_apertura = ?, 
        fecha_vencimiento = ?, 
        monto_actual = ?, 
        companhia = ?, 
        direccion = ?, 
        telefono = ? 
        WHERE id = ?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssssssssi", $estadoCuenta, $numeroCuenta, $moneda, $fechaApertura, $fechaVencimiento, $montoActual, $companhia, $direccion, $telefono, $id);

    if ($stmt->execute()) {
        header("Location: vista_formulario.html");
        exit();
    } else {
        echo "Error al actualizar el registro.";
    }
    $stmt->close();
    
} else if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $stmt = $conexion->prepare("SELECT * FROM formulario_principal WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $formulario = $resultado->fetch_assoc();
    $stmt->close();
} else {
    echo "ID no válido.";
    exit();
}
?>

<!-- HTML para mostrar el formulario de edición -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Formulario</title>
</head>
<body>
    <h2>Editar Formulario</h2>
    <form method="POST" action="editar.php">
        <input type="hidden" name="id" value="<?php echo $formulario['id']; ?>">
        Estado Cuenta: <input type="text" name="estado_cuenta" value="<?php echo $formulario['estado_cuenta']; ?>"><br>
        Número de Cuenta: <input type="text" name="numero_cuenta" value="<?php echo $formulario['numero_cuenta']; ?>"><br>
        Moneda: <input type="text" name="moneda" value="<?php echo $formulario['moneda']; ?>"><br>
        Fecha Apertura: <input type="text" name="fecha_apertura" value="<?php echo $formulario['fecha_apertura']; ?>"><br>
        Fecha Vencimiento: <input type="text" name="fecha_vencimiento" value="<?php echo $formulario['fecha_vencimiento']; ?>"><br>
        Monto Actual: <input type="text" name="monto_actual" value="<?php echo $formulario['monto_actual']; ?>"><br>
        Compañía: <input type="text" name="companhia" value="<?php echo $formulario['companhia']; ?>"><br>
        Dirección: <input type="text" name="direccion" value="<?php echo $formulario['direccion']; ?>"><br>
        Teléfono: <input type="text" name="telefono" value="<?php echo $formulario['telefono']; ?>"><br>
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
