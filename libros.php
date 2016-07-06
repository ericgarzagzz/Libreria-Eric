<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Librería Eric - Libros</title>
  <link rel="icon" type="image/png" href="/src/img/icono16.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="src/css/main.css">
  <link rel="stylesheet" href="src/css/animate.css">

</head>
<body>

<div class="menu animated fadeIn">
  <nav class="padding-largo row text-center">
    <ul class="no-lista">
      <li class="col-md-2"><a href="index.html" class="titulo-chico">Librería Eric</a></li>
      <li class="col-md-3"><a href="libros.php">Libros</a></li>
      <li class="col-md-3"><a href="contacto.html">Contacto</a></li>
      <li class="col-md-3"><a href="acercade.html">Acerca de</a></li>
    </ul>
  </nav>
</div>

  <section class="animated fadeInLeft retraso-1">
    <div class="text-center">
      <h1 class="titulo">Libros</h1>
    </div>
  </section>

  <table class="col-md-12 table-bordered text-center table-responsive animated fadeInUp retraso-2" style="margin-top: 50px;">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Autor</th>
        <th>Precio</th>
      </tr>
    </thead>

  <tbody>
    <!-- Contenido generado por el servidor -->

    <?php

    require('conn.php');

    $query = "SELECT * FROM books";
    $resultado = $conn->query($query);

    while($row = $resultado->fetch_assoc()){

    ?>

    <tr id="libro">
      <td class="libro"><?php echo $row['id'];  ?></td>
      <td class="libro"><?php echo $row['title'];  ?></td>
      <td class="libro"><?php if($row['author'] != "Blank")echo $row['author'];  ?></td>
      <td class="libro"><?php if($row['price'] != "Blank")echo "$", $row['price'];  ?></td>
    </tr>

    <?php
    }
    ?>

  </tbody>

  </table>

</body>
</html>

<?php
mysqli_close($conn);
?>
