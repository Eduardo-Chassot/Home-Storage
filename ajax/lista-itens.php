<?php 
require_once("../codigos/config.php");

$consulta = consultar("SELECT * FROM item WHERE ativo = 1 ORDER BY pos");

arrayParaJson($consulta);
?>