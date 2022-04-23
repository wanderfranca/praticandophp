<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$bd = 'praticandophp';

$mysqli = new mysqli($host, $usuario, $senha, $bd);

//VERFIFICAR SE HOUVE ALGUM ERRO NA CONEXÃO
if($mysqli->connect_errno)
echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;


?>