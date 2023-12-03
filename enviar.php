<?php

$Nome       = $_POST['nome'].' '.$_POST['sobrenome'];
$Email      = $_POST['email'];
$Turno      = $_POST['turno'];
$Turma      = $_POST['turma'];
$Whatsap    = $_POST['Whatsap'];
$Mensagem   = $_POST['mensagem'];

$destino       = 'robertojunioraluno@gmail.com';
$Assunto       = "Mensagem do Formulário";

$Headers    = "MIME-Version: 1.1\n";
$Headers   .= "Content-type: text/html; charset=utf-8\n";
$Headers   .= "From: $Email\n";  // Corrigido aqui
$Headers   .= "Return-Path: $Email\n"; // Corrigido aqui
$Headers   .= "Reply-to: $Email\n"; // Corrigido aqui

mail($destino, $Assunto, $Mensagem, $Headers);

header('Location: obrigado.php'); 
exit(); // Adicionado para garantir que o código seja encerrado após o redirecionamento
?>
