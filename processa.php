<?php
require_once 'db_connect.php';

if($_POST){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$id = $_POST['id'];
	$mensagem = $_POST['mensagem'];
	
	
	
}
if($nome !='' && $email!='' && $mensagem!=''){


 $sql = "INSERT INTO comentarios (nome, email, id, mensagem) VALUES ('$nome', '$email', '$id', '$mensagem')";

 if($connect->query($sql) === TRUE) {
 	if($id==="2"){
 	header("Refresh: 0;  url=perdido_em_marte.php");}
 	else if($id==="3"){
 	header("Refresh: 0;  url=matrix.php");}
 	else if($id==="4"){
 	header("Refresh: 0;  url=segunda.php");}
 	else if($id==="5"){
 	header("Refresh: 0;  url=starwars.php");}
 	else if($id==="6"){
 	header("Refresh: 0;  url=vigadores.php");}
 	else if($id==="7"){
 	header("Refresh: 0;  url=re7.php");}
 	else if($id==="8"){
 	header("Refresh: 0;  url=re8.php");}
 	else if($id==="9"){
 	header("Refresh: 0;  url=re9.php");}
 	else if($id==="10"){
 	header("Refresh: 0;  url=re10.php");}
 	else if($id==="11"){
 	header("Refresh: 0;  url=re11.php");}
 	else if($id==="12"){
 	header("Refresh: 0;  url=re12.php");}
 	else if($id==="13"){
 	header("Refresh: 0;  url=re13.php");}
 	else if($id==="14"){
 	header("Refresh: 0;  url=re14.php");}
 	else if($id==="15"){
 	header("Refresh: 0;  url=re15.php");}
 	else {
 		header("Refresh: 0;  url=index.php");
 	}
 }else {
 	echo "Error ". $sql . ' ' . $connect->connect_error;

 }

}else{
	echo "Algum campo não foi preenchido!";
}
 $connect->close();
 ?>
