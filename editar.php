<!DOCTYPE html>
<html>
    <head>
        <title>editar page</title>
    </head>
    <body>
        <?php echo '<p>editar page</p>'; ?>

        <form action="procesar_formulario.php" method="post">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre"><br>

		<label for="correo">Correo Electrónico:</label>
		<input type="email" id="correo" name="correo"><br>

		<input type="submit" value="Enviar">
	</form>
    </body>
</html>