<!DOCTYPE html>
<html>

<head>
	<title> Liste des clients</title>
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
	$customer = new customer(null, null, null, null);
	$data =  $customer->get();
	$data = json_decode($data, true);
	?>
	<div>
		<br><br>
		<center>
			<h3>Liste des clients</h3>
		</center>
		<br><br>
		<center><a href="http://localhost:8080/PHPCODE/CustCreateForm.php">Creer un nouveau client</a></center>
		<br><br>
	</div>
	<div class="container">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Prenom</th>
						<th>Nom</th>
						<th>E-mail</th>
						<th>Suppression</th>
						<th>Modification</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($data as $row) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td><?= $row['first_name']; ?> </td>
							<td><?= $row['last_name']; ?> </td>
							<td><?= $row['email']; ?> </td>
							<form action="Controller/Controlleur_client.php" method="POST">
								<td><input type="submit" class="btn btn-primary w-100" value="Supprimer" name="delete" /> </td>
								<input type="hidden" class="btn btn-primary w-100" name="id" value=<?= $row['id']; ?> />
							</form>
							<form action="CustUpdateForm.php" method="POST">
								<td><input type="submit" class="btn btn-primary w-100" value="Modifier" name="edit" /></td>
								<input type="hidden" class="btn btn-primary w-100" name="id" value=<?= $row['id']; ?> />
							</form>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>


		</div>
	</div>



</body>

</html>