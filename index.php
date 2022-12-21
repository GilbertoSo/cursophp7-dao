<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(14);
//echo $root;

//Carrega uma lista de usuaruios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);

//Carrega um usuário usando login e a senha
$usuario = new Usuario();
$usuario->login("root", "54321");

echo $usuario;

 ?>