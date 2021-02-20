<?php 

include("conexion_BD.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 ) {

	    $id=$_REQUEST['id'];
		$name = trim($_POST['name']);
	    $Apellido = trim($_POST['apellido']);
	    $Correo = trim($_POST['correo']);
	    $Observaciones = trim($_POST['observaciones']);
	    

	   /** $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')"; **/


$consulta= "UPDATE datos SET ID_usr='$id', Nombre_usr='$name', Apellido_usr='$Apellido', Correo_usr='$Correo', Observaciones_usr='$Observaciones' WHERE ID_usr='$id' ";

	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	header("location: tabla.php");
	    }
	    else {
	    	echo "error";
	    }

    }
}

?>