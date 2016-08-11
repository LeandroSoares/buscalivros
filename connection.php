<?php
  require 'config.php';

  if(isset($db_host)){
    $connection = mysql_connect($db_host.":".$db_port, $db_user, $db_pass) or die(mysql_error());
    mysql_select_db("tracalivros")or die(mysql_error());
  }
  else {
    die('ERRO: SEM CONEXÃO COM BANCO DE DADOS');
    }

 ?>
