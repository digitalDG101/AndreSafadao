<?php

$mensagem = $_GET['acao'];
$arr = array();
if(isset($mensagem)){
   if($mensagem == 'sucesso'){ $arr['mensagem'] = "Mensagem de sucesso!"; }
   elseif ($mensagem == 'erro') { $arr['mensagem'] = "Mensagem de erro!"; }
}else{
   $arr['mensagem'] = "Não possui GET nem POST";
}

echo $_GET['jsoncallback'] . '(' . json_encode($arr) . ');';

?>
