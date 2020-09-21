<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Create</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="card m-3">
		  <div class="card-header">
				<div class="bg-info">
					<h1 class="float-left"><a href="index.php">People</a></h1>
					<h1 class="float-right">Create</h2>
				</div>
		  </div>
		  <div class="card-body">
				<form action="../controll/controlador.php?method=create" method="POST">
					<div class="form-group">
						<label for="">Name:</label>
						<input type="text" class="form-control" name="name" placeholder="Allan" required>
					</div>

					<div class="form-group">
						<label for="">CPF:</label>
						<input type="text" class="form-control" name="cpf" placeholder="111.111.111-11" required>
					</div>

					<div class="form-group">
						<label for="">RG:</label>
						<input type="text" class="form-control" name="rg" placeholder="11.111.111-11">
					</div>

					<div class="form-group">
						<label for="">Email:</label>
						<input type="email" class="form-control" name="email" placeholder="Allan@allan.com">
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
						<input type="date" class="form-control" name="birthDate" required>
					</div>

					<div class="form-group">
						<label for="">Gender:</label>
						<select class="custom-select" name="gender">
						  <option value="1">Masculino</option>
						  <option value="2">Feminino</option>
						</select>
					</div>

					<input type="submit" class="btn btn-primary btn-block" value="Create" />
				</form>
			</div>
		</div>
</body>
</html>
