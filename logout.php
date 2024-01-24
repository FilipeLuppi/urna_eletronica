<?php

session_start();

if (isset($_SESSION['LoginMesario'])) {
  unset($_SESSION['LoginMesario']);
  unset($_SESSION['LoginEleitor']);

  session_destroy(); //Destroi a seção por segurança

  header("Location: index.php"); //Redireciona o visitante para login

  exit;
}
