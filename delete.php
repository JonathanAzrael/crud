<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `test` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
	header("Location: index.php?msg=Cadastro deletado com sucesso");
}
else {
	echo "Erro: " . mysqli_error($conn);
} 
?>