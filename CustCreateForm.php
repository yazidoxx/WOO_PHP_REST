<!DOCTYPE html>
<html>

<head>
	<title>Creation de client</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div>
		<br><br>
		<center>
			<h3>Creation d'un client</h3>
		</center>
		<br><br>
	</div>
	<div class="container">
		<div class="table-responsive">

			<table class="table table-hover">
				<thead>
				</thead>
				<tbody>
					<tr>

						<form action="Controller/Controlleur_client.php" method="POST">


							<div class="form-first_name">
								<label for="name">Nom</label>
								<input type="text" id="first_name" class="form-control" name="first_name" />
							</div>
							<div class="form-group">
								<label for="last_name">Prenom</label>
								<input type="text" id="last_name" class="form-control" name="last_name" />

							</div>
							<div class="form-group">
								<label for="description">E-mail</label>
								<input type="email" id="email" class="form-control" name="email" />

							</div>

							<td><input type="submit" class="btn btn-primary w-100" value="Ajouter Client" name="create" /></td>
							<td><input type="submit" class="btn btn-primary w-100" value="Annuler" name="cancel" /> </td>

						</form>
					</tr>

				</tbody>
			</table>
		</div>
	</div>

</body>

</html>