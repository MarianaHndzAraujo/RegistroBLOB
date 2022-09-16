<?php
  if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $nombre = $_POST['nombre'];
        $matricula = $_POST['matricula'];
        $imgContenido = addslashes(file_get_contents($image));
        
        //Credenciales Mysql
        $Host = 'localhost';
        $Username = 'root';
        $Password = '';
        $dbName = 'prueba';
        
        //Crear conexion con la abse de datos
        $db = new mysqli($Host, $Username, $Password, $dbName);
        
        // Cerciorar la conexion
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into imagen (nombre, matricula, imagen, creado) VALUES ('$nombre', '$matricula', '$imgContenido', now())");
        // COndicional para verificar la subida del fichero
        if($insertar){
            echo "<script> alert('Alumno guardado en BD'); window.location='consulta.php'</script>";
        }else{
            echo "<script> alert('Alumno NO guardado en BD'); window.location='consulta.php'</script>";
        } 
        // Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}

function conectarBD(){
    $servidor="localhost";
    $baseDatos="prueba";
    $usuario="root";
    $contra="";

    $conexion=mysqli_connect($servidor,$usuario,$contra,$baseDatos)or die("No se pudo conectar");
    return $conexion;
  }


Function consulta(){
    $conex= conectarBD();
    $selectU= "select * from imagen";

    try {
      $rsUsuarios= mysqli_query($conex,$selectU);
      mysqli_close($conex);

      return $rsUsuarios;

    } catch (Exception $e) {
      die('exception captura:'. $e->getMessage());
    }

  }

 ?>
