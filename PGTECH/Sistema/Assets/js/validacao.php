<?php
$cpf = str_replace(".", "", $cpf);
$cpf = str_replace("-", "", $cpf);

$mensagem = "CPF Válido";

if ($cpf === '00000000000') {
	$mensagem = "CPF Inválido";

}else{
$a1 = (substr($cpf, 0, 1));
$a2 = substr($cpf, 1, 1);
$a3 = substr($cpf, 2, 1);
$a4 = substr($cpf, 3, 1);
$a5 = substr($cpf, 4, 1);
$a6 = substr($cpf, 5, 1);
$a7 = substr($cpf, 6, 1);
$a8 = substr($cpf, 7, 1);
$a9 = substr($cpf, 8, 1);
$a10 = substr($cpf, 9, 1);
$a11 = substr($cpf, 10, 1);

$a1a = (substr($cpf, 0, 1))*10;
$a2a = (substr($cpf, 1, 1))*9;
$a3a = (substr($cpf, 2, 1))*8;
$a4a = (substr($cpf, 3, 1))*7;
$a5a = (substr($cpf, 4, 1))*6;
$a6a = (substr($cpf, 5, 1))*5;
$a7a = (substr($cpf, 6, 1))*4;
$a8a = (substr($cpf, 7, 1))*3;
$a9a = (substr($cpf, 8, 1))*2;

$soma1 = ($a1a + $a2a + $a3a + $a4a + $a5a + $a6a + $a7a + $a8a + $a9a);
$a10certo = (($soma1)*10) %11;
if ($a10certo == 10 || $a10certo == 11) {
	$a10certo = 0;
}


if ($a10certo != $a10) {
	$mensagem = "CPF Inválido";
}else{

$a1b = (substr($cpf, 0, 1))*11;
$a2b = (substr($cpf, 1, 1))*10;
$a3b = (substr($cpf, 2, 1))*9;
$a4b = (substr($cpf, 3, 1))*8;
$a5b = (substr($cpf, 4, 1))*7;
$a6b = (substr($cpf, 5, 1))*6;
$a7b = (substr($cpf, 6, 1))*5;
$a8b = (substr($cpf, 7, 1))*4;
$a9b = (substr($cpf, 8, 1))*3;
$a10b = (substr($cpf, 9, 1))*2;

$soma2 = ($a1b + $a2b + $a3b + $a4b + $a5b + $a6b + $a7b + $a8b + $a9b + $a10b);
$a11certo = (($soma2)*10) %11;

if ($a11certo == 10 || $a11certo == 11) {
	$a11certo = 0;
}

if ($a11certo !=$a11) {
	$mensagem = "CPF Inválido";
}}}

?>