<?php
include "db_conn.php";

if(isset($_POST['submit'])){
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];

	$sql = "INSERT INTO `test`(`nome`, `sobrenome`, `email`, `sexo`) VALUES (NULL,'$nome','$sobrenome','$email','$sexo')";
	
	$result = mysqli_query($conn, $sql);
	
	if($result) {
		header("Location: index.php?msg=Cadastro realizado com sucesso");
	}
	else{
		echo "Erro: " . mysqli_error($conn);
	}
	
}

?>



	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<title>CRUD - PHP</title>
</head>
<body>
	<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #ccff33;">
		CRUD - PHP
	</nav>

	<div class="container">
		<div class="text-center mb-4">
			<h3>Cadastrar novo Usuário</h3>
			<p.class="text-muted">Preencha o formulário a baixo para se cadastrar</p>
		</div>	
			
		<div class="container d-flex justify-content-center">
			<form action="" method="post" style=width:50vw; min-width:300px;">
				<div class="row mb-3">
					<div class="col">
						<label class="form-label">Nome:</label>
						<input type="text" class="form-control" name="nome"placeholder="Jonathan">
					</div>
					
					<div class="col">
						<label class="form-label">Sobrenome:</label>
						<input type="text" class="form-control" name="sobrenome"placeholder="Azrael">
					</div>
				</div>
				
				<div class="mb-3">
					<label class="form-label">Email:</label>
					<input type="email" class="form-control" name="email" placeholder="name@example.com">
				</div>	
				
				<div class="form-group mb-3">
					<label>Sexo:</label> &nbsp;
					<input type="radio" class="form-check-input" name="sexo" id="masculino" value="masculino">
					<label for="masculino" class="form-input-label">Masculino</label>
					&nbsp;
					<input type="radio" class="form-check-input" name="sexo" id="feminino" value="feminino">
					<label for="feminino" class="form-input-label">Feminino</label>
				</div>
				
				<div>
					<button type="submit" class="btn btn-success" name="submit">Enviar</button>
					<a href="index.php" class="btn btn-danger">Cancelar</a>
				</div>
			</form>
		</div>	
		
		
	<!-- Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	
</body>
</html>