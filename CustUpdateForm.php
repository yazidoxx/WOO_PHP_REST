<!DOCTYPE html>
<html>

<head>
	<title>Modification d'un client</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

	<?php
	include 'Model/client.php';
	$customer = new customer($_POST['id'], null, null, null);
	$data =  $customer->getById();
	$data = json_decode($data, true);
	?>
	<div>
		<br><br>
		<center>
			<h3>Modifier les informations d'un client</h3>
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
							<div class="form-group">
								<label for="id">id</label>
								<input type="text" id="id" class="form-control" name="id" value=<?= $data['id'];  ?> readonly="readonly" />
							</div>
							<div class="form-group">
								<label for="first_name">first name</label>
								<input type="text" id="first_name" class="form-control" name="first_name" value=<?= $data['first_name']; ?> />
							</div>
							<div class="form-group">
								<label for="last_name">last name</label>
								<input type="text" id="last_name" class="form-control" name="last_name" value=<?= $data['last_name']; ?> />
							</div>
							<div class="form-group">
								<label for="email">email</label>
								<input type="text" id="email" class="form-control" name="email" value=<?= $data['email']; ?> />
							</div>
							<td><input type="submit" class="btn btn-primary w-100" value="edit" name="edit" /></td>
							<td><input type="submit" class="btn btn-primary w-100" value="cancel" name="cancel" /> </td>
						</form>
					</tr>

				</tbody>
			</table>
		</div>
	</div>



</body>

</html>