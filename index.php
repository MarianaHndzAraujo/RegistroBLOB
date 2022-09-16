<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Registro de Alumnos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="css/registro.css">

</head>

<body>

    <h1 class="display-3 text-center"><b> Registro de Usuarios</b> </h1>

  <div class="container">

  <form name="MiForm" id="MiForm" method="post" action="funcionesBD.php" enctype="multipart/form-data">
        <div class="form-group">
              <label >Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>


          <div class="form-group">
            <label> Matricula:</label>
            <input type="number" class="form-control" id="matricula" name="matricula">
          </div>
          
        <h4 class="text-center">Seleccione imagen a cargar</h4>
        <div class="form-group">
          <label class="col-sm-2 control-label">Archivos</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" id="image" name="image" multiple>
          </div>
          <button name="submit" class="btn btn-primary">Cargar Imagen</button>
        </div>

        
      </form>


  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>