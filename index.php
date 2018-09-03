<?php 

require_once("config.php");

//Carrega um usuário:
//$usuario = new Usuario();
//$usuario->loadById(3);
//echo $usuario;

//|Carrega uma lista de usuários:
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login:
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando login e senha:
$usuario = new Usuario();
$usuario->login("aaaa", "999999");
echo $usuario;

 ?>