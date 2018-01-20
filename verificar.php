<?php 

include_once 'config.php';
require_once('url.php');


$database = new database();

$database->query("SELECT * FROM usuarios WHERE login = :usuario AND senha = :senha");

$database->bind(':usuario',$_POST['email']);
$database->bind(':senha',$_POST['senha']);

$database->execute();


if ($database->rowCount() == 1){

	$linha = $database->single();
	$nome = $linha['Nome'];
	$Sobrenome= $linha['Sobrenome'];
	$nivel = $linha ['Nivel'];

	echo $nome;

    session_start();

    if($nivel==1){
        $_SESSION['nivel']  = 'Administrador';
    }elseif ($nivel==2){
        $_SESSION['nivel']  = 'Supervisor';
    }

  $_SESSION['usuario'] = $usuario;
  $_SESSION['Nome'] = $nome;
  $_SESSION['Sobrenome'] = $Sobrenome;




  header('Location:dashboard/index.php?id=');


}else{


	session_destroy();
	header('Location:index.php?msg=1');

}



?>