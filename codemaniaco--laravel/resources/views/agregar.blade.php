<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>agrgar mascota</title>

</head>
<body>
	<center>
		<form action="/create" method="POST">
			{{ csrf_field() }}
			<label>Nombre de la mascota</label>
			<input type="text" name="nombre" placeholder="nombre de la mascota">
			<br>
			<label>clase de mascota</label>
			<input type="text" name="clase" placeholder="perro,gato...">
			<br>
			<label>raza de la mascota</label>
			<input type="text" name="raza" placeholder="raza">
			<br>
			<label>Nombre del propietario</label>
			<input type="text" name="propietario" placeholder="nombre del propietario">
			<br>
			<br>
			<button type="submit">+ nueva mascota</button>
		</form>
	</center>
</body>
</html>