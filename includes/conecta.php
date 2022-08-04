<?php
$servername = "br384.hostgator.com.br";
$database = "stud_reserva";
$username = "stud_root";
$password = "brunana80";
// Cria conexão
$conn = mysqli_connect($servername, $username, $password, $database);
// Checka conexão
if (!$conn) {
    die("Erro: " . mysqli_connect_error());
}

?>