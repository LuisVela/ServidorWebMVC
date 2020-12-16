<?php
//Función para verificar si $_GET['menu'] esta definida
function getActiveRoute()
{
  if (isset($_GET['menu'])) {
    return $_GET['menu'];
  } else {
    return null;
  }
}

$VIEWS_ROUTE = "src/controllers/";

//Switch para seleccionar la ruta según opción
switch (getActiveRoute()) {
  case 'Clientes':
    $_GET['action'] = "register";
    require_once($VIEWS_ROUTE . 'client_controller.php');
    break;
  case 'Clientes Registrados':
    $_GET['action'] = "consult";
    require_once($VIEWS_ROUTE . 'client_controller.php');
    break;
  case 'Registro Parqueo':
    $_GET['action'] = "consult";
    require_once($VIEWS_ROUTE . 'parking_controller.php');
    break;
  default:
    require_once('src/views/start.php');
    break;
}
