<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <small>
    locacion: http://localhost/pulpito/vistas/admin/admin.php <br>
    home: <a href="../../index.php">Volver al Home</a>
    </small>
    
    <!-- Agregar, editar, eliminar -->
    <h3>Agregar Recomendacion</h3>
    <!-- https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php -->
    <form action="insert.php" method="post">
    <p>
        <label for="nombre">nombre:</label>
        <input type="text" name="nombre" id="nombre">
    </p>
    <p>
        <label for="descripcion">descripcion:</label>
        <input type="text" name="descripcion" id="descripcion">
    </p>
    <p>
        <label for="img_link">img_link:</label>
        <input type="text" name="img_link" id="img_link">
    </p>
	<p>
		<label for="link">link:</label>
        <input type="text" name="link" id="link">
	</p>
    <input type="submit" value="Agregar">
    </form>



    
<!-- no funciona -->
    <h3>Eliminar Recomendacion</h3>
    <form action="delete.php" method="post">
    <p>
        <label for="nombredelete">nombre:</label>
        <input type="text" name="nombredelete" id="nombredelete">
    </p>
    <input type="submit" value="Eliminar">
    </form>
	
	
	
	    <h3>Actualizar</h3>
    <form action="update.php" method="post">
    <p>
        <label for="nombreactualizar">nombre de la recomendacion</label>
        <input type="text" name="nombreactualizar" id="nombreactualizar">
    </p>

    <p>
        <label for="nombre">nuevo nombre</label>
        <input type="text" name="nombreupdate" id="nombreupdate">
    </p>
    <p>
        <label for="descripcion">nuevo descripcion:</label>
        <input type="text" name="descripcionupdate" id="descripcionupdate">
    </p>
    <p>
        <label for="img_link">nuevo img_link:</label>
        <input type="text" name="img_linkupdate" id="img_linkupdate">
    </p>
	<p>
		<label for="link">nuevo link:</label>
        <input type="text" name="linkupdate" id="linkupdate">
	</p>
    <input type="submit" value="Actualizar">
    </form>

    </form>
	
	
	
	
	
	
</body>
</html>