<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = htmlspecialchars($_POST['nome']);
  $email = htmlspecialchars($_POST['email']);
  $mensagem = htmlspecialchars($_POST['mensagem']);

  $destino = "seuemail@exemplo.com"; // Troque pelo seu e-mail
  $assunto = "Mensagem do site";
  $corpo = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";

  $headers = "From: $email";

  if (mail($destino, $assunto, $corpo, $headers)) {
    echo "Mensagem enviada com sucesso!";
  } else {
    echo "Erro ao enviar a mensagem.";
  }
}
?>