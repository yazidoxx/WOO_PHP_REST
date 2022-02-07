<!DOCTYPE html>
<html>

<head>
	<title>Modification d'un produit</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

	<?php
	include 'Model/produit.php';
	$produit = new produit($_POST['id_produit'], null, null, null, null);
	$data =  $produit->getById();
	$data = json_decode($data, true);
	$var = $data['description'];
	$var2 = $data['name'];
	$var3 = $data['slug'];
	?>
	<div>
		<br><br>
		<center>
			<h3>Modification des informations d'un produit</h3>
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
						<form action="Controller/Controlleur_produit.php" method="POST">
							<div class="form-group">
								<label for="id">Identifiant Produit</label>
								<input type="text" id="id" class="form-control" name="id" value=<?= $data['id'];  ?> readonly="readonly" />
							</div>
							<div class="form-group">
								<label for="name">Nom du Produit</label>
								<?php echo '<input type="text" id="slug" class="form-control"  name="name"  value="' . $var2 . '"/>'; ?>
							</div>
							<div class="form-group">
								<label for="slug">slug</label>
								<?php echo '<input type="text" id="slug" class="form-control"  name="slug"  value="' . $var3 . '"/>'; ?>
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<?php echo '<input type="text" id="slug" class="form-control"  name="description"  value="' . $var . '"/>'; ?>
							</div>
							<div class="form-group">
								<label for="regular_price">Prix Original</label>
								<input type="text" id="slug" class="form-control" name="regular_price" value=<?= $data['regular_price']; ?> />
							</div>
							<td><input type="submit" class="btn btn-primary w-100" value="Modifier" name="edit" /></td>
							<td><input type="submit" class="btn btn-primary w-100" value="Annuler" name="cancel" /> </td>
						</form>
					</tr>

				</tbody>
			</table>
		</div>
	</div>

</body>

</html>