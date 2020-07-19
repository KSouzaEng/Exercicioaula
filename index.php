<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');


require 'classes/BancoDados.php';

$bancoDados = new BancoDados();
$conexao =$bancoDados->getConexao();

require 'layouts/form.php';
