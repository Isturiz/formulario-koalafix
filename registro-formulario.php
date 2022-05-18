<?php

$cliente = $_POST['cliente'];
$cedula = $_POST['cedula'];
$fecha = $_POST['fecha'];
$equipo = $_POST['equipo'];
$descripcion = $_POST['descripcion'];
$falla = $_POST['falla'];
$garantia = $_POST['garantia'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UFT-8">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="registro.css">
  </head>
  <body>
    <header>

      <div>
        <h1 id="titulo">Registro</h1>
      </div>

      </header>

      <!-- ========== MAIN ========== -->
      <main>
      <!-- Formulario -->
      <form id="formulario">

      <div class="container">
        <!-- Cliente -->
        <div class="formulario-grupos">
          <p class="text-p">Cliente:</p>
          <p class="formulario-controles"><?php echo $cliente;?></p>
        </div>

        <div class="formulario-grupos">
          <p class="text-p">Cédula:</p>
          <p class="formulario-controles"><?php echo $cedula;?></p>
        </div>

        <div class="formulario-grupos">
          <p class="text-p">Fecha:</p>
          <p class="formulario-controles"><?php echo $fecha;?></p>
        </div>

        <div class="formulario-grupos">
          <p class="text-p">Equipo:</p>
          <p class="formulario-controles"><?php echo $equipo;?></p>
        </div>

        <div class="formulario-grupos">
          <p class="text-p">Descripción:</p>
          <p class="formulario-controles"><?php echo $descripcion;?></p>
        </div>

        <div class="formulario-grupos">
          <p class="text-p">Falla:</p>
          <p class="formulario-controles"><?php echo $falla;?></p>
        </div>

        <div class="formulario-grupos">
          <p class="text-p">Garantía:</p>
          <p class="formulario-controles"><?php echo $garantia;?></p>
        </div>

        <a href="index.html" class=boton>Volver</a>

      </div>
      </form>
    </main>
  </body>
</html>