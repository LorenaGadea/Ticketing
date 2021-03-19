<?php
/**
   Se usa el nif del usuario porque es el campo unique más humanamente comprensible de la BBDD. 

   Simplificando lo máximo posible, no hay mensajes de error, sino que se:
   - Si el usuario existe y la clave coincide redirige al panel de usuario
   - Si no, muestra de nuevo el formulario
 */

require_once("Classes/funcionesModelo.php");

if(isset($_POST["btnEntrar"]) &&
   isset($_POST["nif"]) &&
   isset($_POST["clave"])){

    $usuario=getUsuarioLoginMedianteNifClave($_POST["nif"],$_POST["clave"]);

    // Se redirige al panel del usuario sólo si se ha encontrado un usuario válido
    if($usuario!=null){
	header('Location: panelUsuario.php');
    }
    // Si no se redirige, se muestra la pantalla de login de nuevo
}
?>
<html>
    <head>
	<title>Sistema de gestión de incidencias - Login</title>
    </head>
    <body>
	<h1>Sistema de gestión de incidencias</h1>
	<h2>Login</h2>
	<form method="post">
	    <fieldset>
		<label>NIF del usuario</label>
		<input type="text" name="nif"/>
	    </fieldset>
	    <fieldset>
		<label>Clave del usuario</label>
		<input type="password" name="clave"/>
	    </fieldset>
	    <input type="submit" name="btnEntrar" value="Entrar"/>
	</form>
    </body>
</html>
