<?php
include('../config/config.php');
include('patient.php');

if (isset($_POST) && !empty($_POST)){
  /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */

  $data= new patient(); 

  
  $save = $data-> save($_POST); 
  if($save){
    $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div> ';
  }else{
    $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <link rel="stylesheet" href="../Estilos css/estilof.css">
</head>
<body>
<?php include('../menu.php') ?>

<?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>
<!-- CREAN FORMULARIO -->
<form method="POST" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombres</label>
    <input type="text" name="firstname" id="firstname"   class="form-control" >
    
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Apellidos</label>
    <input type="text" name="lastname" id="lastname"  class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Telefono</label>
    <input type="text" name="phone" id="phone" class="form-control"  >
  </div>
  <div class="col-12">
    <button >Registrar</button>
  </div>
</form>

<img class="img.art3" src="./img/muñeca fono.jpg" width="700px" height="350px">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>