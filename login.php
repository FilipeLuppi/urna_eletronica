<?php
require_once('util.php');

travarPagina(__FILE__);

session_start();

$_SESSION['LoginMesario'] = true;

header('Location: eleitor.php');
