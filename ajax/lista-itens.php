<?php 
require_once("../codigos/config.php");

$consulta = consultar("SELECT * FROM itens WHERE ativo = 1 ORDER BY pos");

arrayParaJson($consulta);
?>