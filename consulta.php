<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title> Consulta Almunos </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/consulta.css">
  </head>

<body>
  

<h1 class="display-3 text-center" style="color:dark;"><b>Registro Almunos</b></h1>

<div class="container mt-5" method="post" action="funcionesBD.php">

<button onclick="window.location.href='index.php'">Registrar</button>

  <table class="table table-hover">
    <thead class="thead-light">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Matricula</th>
        <th scope="col">Foto</th>
        <th scope="col">Fecha</th>
      </tr>
    </thead>
    <tbody>
      <?php
          require 'funcionesBD.php';
          $rsVJ= consulta();
          while ($arrVJ=mysqli_fetch_array($rsVJ)) {
            ?>
            <tr>
              <td><?php echo $arrVJ['id']; ?></td>
              <td><?php echo $arrVJ['nombre']; ?></td>
              <td><?php echo $arrVJ['matricula']; ?></td>
              <td>
               <img width="100" src="data:image/jpg;base64,<?php echo  base64_encode($arrVJ['imagen']); ?>">
              </td>  
              <td><?php echo $arrVJ['creado']; ?></td> 
            </tr>
             <?php
            }
            ?>
      </tbody>
    </table>
  </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>
