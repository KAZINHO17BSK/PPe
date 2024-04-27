<?php
session_start();

$user_nome = $_SESSION['user_nome'];

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "2b";
$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "UPDATE usuarios SET likes = likes + 1 WHERE nome = '$user_nome'";
$conn->query($sql);

$sql = "SELECT likes FROM task WHERE nome = '$user_nome'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();
echo $row["likes"];

$conn->close();
?>