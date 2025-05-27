<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["name"]) && !empty($_POST["name"]) &&
        isset($_POST["email"]) && !empty($_POST["email"]) &&
        isset($_POST["pass"]) && !empty($_POST["pass"]) &&
        isset($_POST["confirm_pass"]) && !empty($_POST["confirm_pass"])
    ) {
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $pass = trim($_POST["pass"]);
        $confirm_pass = trim($_POST["confirm_pass"]);

        if ($pass !== $confirm_pass) {
            echo "Las contraseñas no coinciden. Por favor, intenta de nuevo.";
        } else {
            $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

            $sql_check_email = "SELECT * FROM datos WHERE correo = ?";
            $stmt = $conexion->prepare($sql_check_email);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "Este correo ya está registrado.";
            } else {
                $sql = "INSERT INTO datos (usuario, correo, contra) VALUES (?, ?, ?)";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("sss", $name, $email, $hashed_pass);

                if ($stmt->execute()) {
                    echo "Registro exitoso.";
                    header("Location: table.html");
                } else {
                    echo "Error al registrar el usuario. Intenta de nuevo más tarde.";
                }
            }
            $stmt->close();
        }
    } else {
        echo "Por favor, llena todos los campos.";
    }
}
?>
