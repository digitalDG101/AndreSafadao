<?php

$mensagem = $_POST['acao'];

if($mensagem == 'sucesso'){ echo "Mensagem de sucesso!"; }
elseif ($mensagem == 'erro') { echo "Mensagem de erro!"; }

?>
