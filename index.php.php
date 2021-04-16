<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo CRUD</title>
</head>
<body>
<center>
	<br>
	<br>
	<div id="form">
		<form method="post">
			<table width="100%" border="1" cellpadding="15">
				<tr>
					<td>
						<input type="text" name="fn" placeholder="Nombre">
						
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="ln" placeholder="Apellido">
						
					</td>
				</tr>
				<tr>
					<td>
						<?php
						if (isset($_GET['edit'])){
							?>
							<button type="submit" name="update">Editar</button>
							<?php

						}else{
							?>
							<button type="submit" name="save"> Registrar</button>
							<?php

						}

						?>
						
					</td>
				</tr>

				
			</table>
		</form>
		
	</div>
</center>
</body>
</html>