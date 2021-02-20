<?php 

include("conexion_BD.php");



        $id=$_REQUEST['id'];

$consulta="DELETE FROM datos WHERE ID_usr='$id' ";

        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            header("location: tabla.php");
        }
        else {
            echo "error";
        }

    
?>