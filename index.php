<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/Estiloformula.css">
    
    
</head>
<body>


        <div class="container">
        <h1>Crear usuario</h1>
            <br>
            <form method="post" class="">

                <div class="form-group row">
                
                            <div class="col-xs-12 col-md-6">
                                <label for="name">Nombre:</label>
                                <input type="text" name="name" placeholder="Nombre" class="form-control custom-file-input" required>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="apellido">Apellido:</label>
                                <input type="text" name="apellido" placeholder="Apellido" class="form-control" required>
                            </div>
                     
                </div>  
           
                <div class="form-group row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <label for="correo">Correo:</label>
                        <input type="correo" name="correo" placeholder="Correo" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <label for="observaciones">Observaciones:</label>
                        <textarea class="form-control" name="observaciones" cols="30" rows="4" placeholder="Observaciones"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <button name="register" class="btn btn-primary col-md-offset-11">Crear</button>
                    </div>
                </div>

            </form>
        </div>

        <div class="container"><div class="col-md-offset-11"><button class="btn btn-primary" type="button" onclick="window.open('bienvenidos.html')">Salir</button></div></div>

   
        <?php 
        include("Registro.php");
        ?>
         <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
      
</body>
</html>