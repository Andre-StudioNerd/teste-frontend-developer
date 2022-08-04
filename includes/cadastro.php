<?php
session_start();
include_once("conecta.php");
$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$mensagem=$_POST['mensagem'];



//inserindo dados

$inserir= "INSERT INTO reserva (nome,email,telefone, mensagem) VALUES ('$nome','$email','$telefone','$mensagem')";

//executando query
if(mysqli_query($conn,$inserir)){
   
  $_SESSION['msg']="<div class='aviso'<h3><i class='fa fa-exclamation-circle' aria-hidden='true'></i> Obrigado, em breve retornaremos um contato para confirmação.</h3></div>";
 header("Location: https://teste.studionerd.com.br/ellos_teste/");
    

}


else{
    echo "Erro" . mysqli_connect_error($conn,$inserir);
}
mysqli_close($conn);


?>