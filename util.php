<?php

travarPagina(__FILE__);

//Função para não deixar acessar as paginas diretamente no browser
function travarPagina($pagina)
{
  if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename($pagina)) === 0) {
    header("location: login.php");
  }
}

function verificarSessaoUsuario()
{
  session_start();

  if (!isset($_SESSION['LoginMesario'])) {
    unset($_SESSION['LoginMesario']);
    unset($_SESSION['LoginEleitor']);

    session_destroy(); //Destroi a seção por segurança

    header("Location: login"); //Redireciona o visitante para login

    exit;
  }
}

function usuarioLogado()
{
  session_start();

  return isset($_SESSION['LoginMesario']);
}

function eleitorLogado()
{
  session_start();

  return isset($_SESSION['LoginEleitor']);
}
