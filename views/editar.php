<?php
	require_once '../dao/DAO.php';

	$person = PersonDAO::searchId($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Edit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="card m-3">
		  <div class="card-header">
				<div class="bg-info">
					<h1 class="float-left"><a href="index.php">People</a></h1>
					<h1 class="float-right">Edit</h2>
				</div>
		  </div>
		  <div class="card-body">
				<form action="../controll/controlador.php?method=edit" method="POST">

					<input type="text" name="id" value="<?=$person[0]?>" hidden>

					<div class="form-group">
						<label for="">Name:</label>
						<input type="text" class="form-control" value="<?=$person[1]?>" name="name"placeholder="Allan" required>
					</div>

					<div class="form-group">
						<label for="">CPF:</label>
						<input type="text" class="form-control" name="cpf" value="<?=$person[2]?>" placeholder="111.111.111-11" required>
					</div>

					<div class="form-group">
						<label for="">RG:</label>
						<input type="text" class="form-control" name="rg" value="<?=$person[3]?>" placeholder="11.111.111-11">
					</div>

					<div class="form-group">
						<label for="">Email:</label>
						<input type="email" class="form-control" name="email" value="<?=$person[4]?>" placeholder="Allan@allan.com">
					</div>

					<div class="form-group">
						<label for="">Marital Status:</label>
						<select class="custom-select" name="maritalStatus">
						  <option value="1">Solteiro</option>
						  <option value="2">Namorando</option>
						  <option value="3">Casado</option>
						</select>
					</div>

					<div class="form-group">
						<label for="">Birth Date:</label>
						<input type="date" class="form-control" name="birthDate" value="<?=$person[6]?>" required>
					</div>

					<div class="form-group">
						<label for="">Gender:</label>
						<select class="custom-select" name="gender">
						  <option value="1">Masculino</option>
						  <option value="2">Feminino</option>
						</select>
					</div>

					<input type="submit" class="btn btn-primary btn-block" value="Edit" />
				</form>
			</div>
		</div>
</body>
</html>
