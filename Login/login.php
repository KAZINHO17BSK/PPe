<?php
session_start();

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "2b";

$db_phone = '123456789';
$db_password = 'senha123';

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE phone='$phone' AND password='$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['logged_in'] = true;
        header("Location: ../Pagina/index.html");
        exit();
    } else {
        $_SESSION['error'] = 'Telefone ou senha incorretos!';
        header("Location: index.html?error=1");
        exit();
    }
} else {
    header("Location: index.html");
    exit();
}

$conn->close();
?>
