<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
        
		 <link rel="stylesheet" href="css/bootstrap.min.css">
		 <link rel="stylesheet" href="css/estilo_enlace.css">
</head>
<body>
						<div class="container">
							<h1>Usuarios</h1>
							<label class="Help-block">N usuarios registrados</label>
						</div>
						<div class="container">
							<div class="col-md-offset-10"><button class="btn btn-primary" type="button" onclick="window.open('index.php')">Nuevo usuario</button></div></div>
							<br>
							<br>

               				 <div class="container" id="main-container">
								<div class="table-responsive">
                        
									<table  class="table table-hover">
												<thead>
													<tr class="warning">
														<th scope="col" colspan="1">Nombre</th>
														<th scope="col" colspan="1">Apellido</th>
														<th scope="col" colspan="1">Correo</th>
														<th scope="col" colspan="1">Status</th>
														<th scope="col" colspan="2"></th>
													</tr>
												</thead>
											<tbody>
												
									<?php 
										include("conexion_BD.php");
										$query="SELECT * FROM datos";
										$resultado=$conex -> Query($query);
										while ($row=$resultado -> fetch_assoc()) {
										?>	
											<tr>		
												<td><?php echo $row['Nombre_usr']; ?></td>
												<td><?php echo $row['Apellido_usr']; ?></td>
												<td><?php echo $row['Correo_usr']; ?></td>
												<td><?php echo $row['Status_usr'];?></td>
												<td><a class="enlace1" href="Edit.php?id=<?php echo $row['ID_usr']; ?>">Editar</a></td>
												<td><a class="enlace2" href="Eli.php?id=<?php echo $row['ID_usr']; ?>">Eliminar</a></td>

											</tr>
									<?php
										}
									?>


											</tbody>
										</table>
								</div>
        			</div>

					<div class="container"><div class="col-md-offset-11"><button class="btn btn-primary" type="button" onclick="window.open('bienvenidos.html')">Salir</button></div></div>

		<script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

	</body>
</html>

 