<!DOCTYPE html>
<html lang="es">

<head>

  <title>Desarrollo Web Avanzado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- LIBRERIAS BOOTSTRAP-->

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="src/assets/bootstrap/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="src/assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <header>
    <?php
    require_once('src/components/header.php');
    ?>
  </header>

  <section>
    <div class="container">
      <?php
      // carga el archivo routing.php para direccionar a la página .php que se incrustará entre la header y el footer
      require_once('src/routing.php');
      ?>

    </div>
  </section>

  <footer>
    <?php
    include_once('src/components/footer.php');
    ?>
  </footer>
</body>

</html>