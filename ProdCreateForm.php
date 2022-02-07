<!DOCTYPE html>
<html>

<head>
	<title>Creation de produit</title>
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
			<h3>Creation d'un produit</h3>
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
								<label for="name">Nom du Produit</label>
								<input type="text" id="name" class="form-control" name="name" />
							</div>
							<div class="form-group">
								<label for="slug">slug</label>
								<input type="text" id="slug" class="form-control" name="slug" />

							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<input type="text" id="slug" class="form-control" name="description" />

							</div>
							<div class="form-group">
								<label for="regular_price">Prix Original</label>
								<input type="number" id="slug" class="form-control" name="regular_price" />

							</div>

							<td><input type="submit" class="btn btn-primary w-100" value="Ajouter Produit" name="create" /></td>
							<td><input type="submit" class="btn btn-primary w-100" value="Annuler" name="cancel" /> </td>

						</form>
					</tr>

				</tbody>
			</table>
		</div>
	</div>

</body>

</html>