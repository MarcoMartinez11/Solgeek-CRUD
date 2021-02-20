<?php 

include("conexion_BD.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1) {
	    $name = trim($_POST['name']);
	    $Apellido = trim($_POST['apellido']);
	    $Correo = trim($_POST['correo']);
	    $Observaciones = trim($_POST['observaciones']);
	   /** $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')"; **/
	   $Status='Activo';

$consulta= "INSERT INTO datos(Nombre_usr, Apellido_usr, Correo_usr, Status_usr, Observaciones_usr) VALUES ('$name','$Apellido','$Correo','$Status','$Observaciones')";

	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>