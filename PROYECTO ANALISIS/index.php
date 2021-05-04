<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<h1>Inicie sesion</h1>
	<div>
		<form method="POST" action="controller.php">
			<table>
				<tr>
					<td>Usuario:</td>
					<td><input type="text" name="txtUsuario"
					placeholder="Ingrese nombre Usuario"></td>
				</tr>
				<tr>
					<td>Contraseña</td>
					<td><input type="password" name="txtClave"></td>
				</tr>
				<td>
					<td colspan="2"><input type="submit" name="Ingresar"></td>
				</td>
				 	
			</table>
		</form>
		
	</div>
</body>
</html>