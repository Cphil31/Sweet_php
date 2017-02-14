<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

	<div class="ui grid">
		<div class="six wide column"></div>
		<div class="four wide column">

			<h1>Sucrerie Shop</h1>

			<table class="ui celled table">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Quantité</th>
				</tr>

				@foreach($sucrerie as $key)
				<tr>
					<td>{{$key->id}}</td>
					<td>{{$key->nom}}</td>
					<td>{{$key->quantité}}</td>
				</tr>
				@endforeach
			</table>

			<form class="ui form">
				<div class="field">
					<label>Ajoute ta sucrerie</label>
					<input type="text" name="name" placeholder="sucrerie">
				</div>
				<div class="field">
					<label>Quantité</label>
					<input type="text" name="last-name" placeholder="quantité">
				</div>
				<button class="ui black button" type="submit">Ajouter</button>
			</form>

		</div>
		
	</div>

	<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>