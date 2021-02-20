 
<!DOCTYPE html>
<html>
<head>
    <title>Registrar usuario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/Estiloformula.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>



    
 <?php 

            $id=$_REQUEST['id'];
            include("conexion_BD.php");
            $query="SELECT * FROM datos WHERE ID_usr='$id'";
            $resultado=$conex -> Query($query);
            $row=$resultado -> fetch_assoc(); 
             ?> 
    
        <div class="container">
            <h1>Editar usuario</h1>
            <br>
            <form action="ModificarProcess.php?id=<?php echo $row['ID_usr']; ?>" method="POST">

                <div class="form-group row">
                
                    <div class="col-xs-12 col-md-6">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" placeholder="Nombre" class="form-control custom-file-input" value="<?php echo $row['Nombre_usr']; ?>" required>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" placeholder="Apellido" class="form-control" value="<?php echo $row['Apellido_usr']; ?>" required>
                    </div>
                     
                </div>  

                <div class="form-group row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <label for="correo">Correo:</label>
                        <input type="correo" name="correo" placeholder="Correo" class="form-control" value="<?php echo $row['Correo_usr']; ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <label for="observaciones">Observaciones:</label>
                        <textarea class="form-control" name="observaciones" cols="30" rows="4" placeholder="Observaciones" value="<?php echo $row['Observaciones_usr']; ?>"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <button name="register" class="btn btn-primary col-md-offset-11">Guardar</button>
                    </div>
                </div>

                
            </form>
        </div>
    </form>
     <?php 
        include("ModificarProcess.php");
        ?>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>
        