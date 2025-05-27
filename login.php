<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = trim($_POST['email']);
        $pass = trim($_POST['pass']);

        $sql = "SELECT * FROM datos WHERE correo = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($pass, $user['contra'])) {
                echo "¡Inicio de sesión exitoso!";
               
            } else {
                echo "Contraseña incorrecta.";
            }
        } else {
            echo "Este correo electrónico no está registrado.";
        }

        $stmt->close();
    } else {
        echo "Por favor, ingresa un correo electrónico y una contraseña.";
    }
}
?>
