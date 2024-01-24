<?php
require_once('util.php');

travarPagina(__FILE__);

session_start();

$_SESSION['LoginEleitor'] = true;

header('Location: votacao.php');
