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




  <div class="container">
      <div class="p-5 my-4 bg-light rounded-3">
          <h1>Vienvenido a tu pagina des distribucion favoritas</h1>
          <p class="lead">la nueva maner de distribuir a llegado ve el tutorial de como usar disneg
              <a href="video tutorial de como usar disneg" class="text-success" target="_blank">tutorialrepublic.com</a>la mejor y mas practica forma de comprar para tu negocio o hogar llego </p>
          <p><a href="https://www.tutorialrepublic.com" target="_blank" class="btn btn-success btn-lg">mira nuestras mejores ofertas</a></p>
      </div>
    </div>

    <?php
    // 1) Conexion
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"disnet");

    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla
    $consulta= "SELECT*FROM moreti WHERE despesa = 'si'";


    // 3) Ejecutar la orden y obtenemos los registros
    $datos= mysqli_query ($conexion, $consulta);

    // 4) Mostrar los datos del registro


    while ( $reg =mysqli_fetch_array($datos) ) { ?>
      <div class="container">
        <div class="row">
          <div class="card w-50">
        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="100px")>

               <div class="card-body">
              <p class="card-text"><?php echo $reg['producto']; ?></p>
              <p class="card-text"><?php echo $reg['precio']; ?></p>
              <p class="card-text"><?php echo $reg['descripcion']; ?></p>

            </div>
          </div>
        </div>
      </div>
  <?php } ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>
</html>
