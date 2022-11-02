<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Fixed Layout Example</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="./css/trabajocss.css">
     <link rel="stylesheet" href="./css/index.css">
     <link rel="stylesheet" href="./css/indexs2.css">
     <link rel="stylesheet" href="./css/mediaquerymobile.css">
     <link rel="stylesheet" href="./css/mediaquerymobilegiro.css">
     <link rel="stylesheet" href="./css/mediaquerytable.css">
      <link rel="stylesheet" href="./css/estilos.css">
<script src="js/bootstrap.bundle.min.js"></script>
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
<br>
      <?php
      // 1) Conexion
      $conexion = mysqli_connect("127.0.0.1", "root", "");
      mysqli_select_db($conexion, "disnet");

      // 2) Preparar la orden SQL
      // Sintaxis SQL SELECT
      // SELECT * FROM nombre_tabla
      // => Selecciona todos los campos de la siguiente tabla
      // SELECT campos_tabla FROM nombre_tabla
      // => Selecciona los siguientes campos de la siguiente tabla
      $consulta='SELECT * FROM vientoandino';

      // 3) Ejecutar la orden y obtenemos los registros
      $datos= mysqli_query($conexion, $consulta);


      // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
      while (  $reg = mysqli_fetch_array($datos) ) {?>

<section>




<div class="" style="    margin: 0px;
    height: 50%;
    width: 16%;
">



          <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="100px")>
          <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['producto']) ?></h3>
          <span><?php echo $reg['precio']; ?></span>
          <a href="vientoadid.php?id=<?php echo $reg['id'] ;?>"class="btn btn-primary">Go somewhere</a>
  </div>
</section>
      <?php }?>
<!--  INTENTO PARA OTRO CONTEINER


      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
-->
</div>
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2021 Tutorial Republic</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="text-dark">Terms of Use</a>
                <span class="text-muted mx-2">|</span>
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>


   <!--  <ul class="ml-site-list">

            <li class="ml-site-mlbo">
                <a class="ml-site-link" id="BO" href="https://www.mercadolibre.com.bo#from=homecom">Bolivia</a>
            </li>
            <li class="ml-site-mlb">
                <a class="ml-site-link" id="BR" href="https://www.mercadolivre.com.br#from=homecom">Brasil</a>
            </li>
            <li class="ml-site-mla">
                <a class="ml-site-link" id="AR" href="https://www.mercadolibre.com.ar#from=homecom">Argentina</a>
            </li><li class="ml-site-mlc">
                <a class="ml-site-link" id="CL" href="https://www.mercadolibre.cl#from=homecom">Chile</a>
            </li>
            <li class="ml-site-mco">
                <a class="ml-site-link" id="CO" href="https://www.mercadolibre.com.co#from=homecom">Colombia</a>
            </li>
            <li class="ml-site-mcr">
                <a class="ml-site-link" id="CR" href="https://www.mercadolibre.co.cr#from=homecom">Costa Rica</a>
            </li>
            <li class="ml-site-mrd">
                <a class="ml-site-link" id="DO" href="https://www.mercadolibre.com.do#from=homecom">Dominicana</a>
            </li>
            <li class="ml-site-mec">
                <a class="ml-site-link" id="EC" href="https://www.mercadolibre.com.ec#from=homecom">Ecuador</a>
            </li>
            <li class="ml-site-mlgt">
                <a class="ml-site-link" id="GT" href="https://www.mercadolibre.com.gt#from=homecom">Guatemala</a>
            </li>
            <li class="ml-site-mlhn">
                <a class="ml-site-link" id="HN" href="https://www.mercadolibre.com.hn#from=homecom">Honduras</a>
            </li>
            <li class="ml-site-mlm">
                <a class="ml-site-link" id="MX" href="https://www.mercadolibre.com.mx#from=homecom">México</a>
            </li>
            <li class="ml-site-mlni">
                <a class="ml-site-link" id="NI" href="https://www.mercadolibre.com.ni#from=homecom">Nicaragua</a>
            </li>
            <li class="ml-site-mpa">
                <a class="ml-site-link" id="PA" href="https://www.mercadolibre.com.pa#from=homecom">Panamá</a>
            </li>
            <li class="ml-site-mlpy">
                <a class="ml-site-link" id="PY" href="https://www.mercadolibre.com.py#from=homecom">Paraguay</a>
            </li>
            <li class="ml-site-mpe">
                <a class="ml-site-link" id="PE" href="https://www.mercadolibre.com.pe#from=homecom">Perú</a>
            </li>
            <li class="ml-site-mlsv">
                <a class="ml-site-link" id="SV" href="https://www.mercadolibre.com.sv#from=homecom">El Salvador</a>
            </li>
            <li class="ml-site-mlu">
                <a class="ml-site-link" id="UY" href="https://www.mercadolibre.com.uy#from=homecom">Uruguay</a>
            </li>
            <li class="ml-site-mlv">
                <a class="ml-site-link" id="VE" href="https://www.mercadolibre.com.ve#from=homecom">Venezuela</a>
            </li>
        </ul> -->

        <footer>conose nuestro
<a href="https://www.facebook.com/recetastradicionalesdecocina/">facebook</a><br><br>

  </footer>
   <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2022 Disneg</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="text-dark">Terms of Use</a>
                <span class="text-muted mx-2">|</span>
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>

</div>
</body>
</html>
