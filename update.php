<?php 

require_once 'db_connect.php';

if($_POST) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	$id = $_POST['id'];


	$sql  = "UPDATE cadastro SET nome = '$nome', email = '$email', mensagem = '$mensagem' WHERE id = {$id}";


	if($connect->query($sql) === TRUE) {
		header("Refresh: 0; url=index1.php");
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>