<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"disnet");
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM moreti WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$repuesta=mysqli_query ($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VientoAndino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="./css/trabajocss.css">
     <link rel="stylesheet" href="./css/index.css">
     <link rel="stylesheet" href="./css/indexs2.css">
     <link rel="stylesheet" href="./css/mediaquerymobile.css">
     <link rel="stylesheet" href="./css/mediaquerymobilegiro.css">
     <link rel="stylesheet" href="./css/mediaquerytable.css">
      <link rel="stylesheet" href="./css/estilos.css">



     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">

<meta name="descriptios" content="disneg">
<meta name="keywords" content="gurpo de distribuidoras,pagina de distribuidoras">
<meta name="author" content="maxi anzorena">

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
          <a href="index.html" class="navbar-brand">Disneg</a>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav">
                  <a href="index.html" class="nav-item nav-link active">Home</a>
                  <a href="empresas.php" class="nav-item nav-link">Empresas</a>
                  <a href="rubro.html" class="nav-item nav-link">rubro</a>
                  <a href="elmejorprecio.html" class="nav-item nav-link">El mejor precio</a>
                  <a href="producto.html" class="nav-item nav-link">Productos</a>
                  <a href="filtro.html" class="nav-item nav-link">Filtros</a>
              </div>

              <div class="navbar-nav ms-auto">
                  <a href="loading.html" class="nav-item nav-link">Register</a>

                     <!--
                          De aca saque el loanding
                      https://freefrontend.com/css-login-forms/ -->

                  <a href="loading.html" class="nav-item nav-link">Login</a>
              </div>
          </div>
      </div>
  </nav>


<?php




$despesa=$datos["despesa"]	;
$congelado=$datos["congelado"]	;
$heladera=$datos["heladera"]	;
$producto=$datos["producto"]	;
$precio	=$datos["precio"]	;
$imagen=$datos["imagen"];
?>
  <button type="submit"><a href="despensamo.php">Despensa</a></button>
    <button type="submit"><a href="congeladosmo.php">congelados</a></button>
<div class="container">
  <div class="row">
    <div class="card w-50">
      <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($imagen)?>" alt="..." />

         <div class="card-body">

        <p class="card-text">$<?php echo $datos["producto"];?></p>
        <p class="card-text"><?php echo $datos["precio"];?></p>
        <a href="https://github.com/Maxianzo/disnet0.0.1" class="btn btn-primary">golge</a>
        <a href="<?php echo $reg['link']; ?>" class="btn btn-primary">Comprar</a>
          <button type="submit"><a href=".html">pruductos</a> $<?php echo $datos["productos"];?></button>
      </div>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
