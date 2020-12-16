<?php
include 'src/utils/functions.php';

$ITEMS_MENU = [
  "Clientes",
  "Clientes Registrados",
  "Registro Parqueo"
];
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/prueba">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        Parqueadero
      </a>
    </div>
    <ul class="nav navbar-nav">
      <?php
      foreach ($ITEMS_MENU as $key => $value) {
        $value;
      ?>
        <li <?php
          if (isActiveLink($value)) { ?>class="active" <?php } ?>>
          <a href="?menu=<?= $value ?>"><?= $value ?></a>
        </li>
      <?php
      }
      ?>
    </ul>
  </div>
</nav>