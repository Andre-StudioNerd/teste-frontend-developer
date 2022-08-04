<?php
$servername = "br384.hostgator.com.br";
$database = "studi_reserva";
$username = "studi_root";
$password = "bruna80";
// Cria conexão
$conn = mysqli_connect($servername, $username, $password, $database);
// Checka conexão
if (!$conn) {
    die("Erro: " . mysqli_connect_error());
}

?>