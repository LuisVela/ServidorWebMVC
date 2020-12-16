<?php
class ClientController
{
    public function __construct()
    {
        //Por defecto
    }

    public function consult()
    {
        $per = new Client();
        $datos = $per->getClient();
        if ($datos != null) {
            # code... Para continuar en otro ejercicio
        }
        //Llamada a la vista
        require_once("src/views/consult_client_view.php");
    }

    public function register($sql)
    {
        $per = new Client();
        $datos = $per->setClient($sql);
        if ($datos != null) {
            # code... Para continuar en otro ejercicio
        }
        header("Location: ../../?menu=Clientes");
    }
}

if (isset($_GET['action'])) {
    $usuarioController = new ClientController();

    //Llamada a la Conexión
    require_once("src/db/db.php");

    //Llamada al Modelo
    require_once("src/models/client.php");

    if (strcmp($_GET["action"], "register") == 0) {
        //Llamada a la vista
        require_once("src/views/register_client_view.php");
    } else {
        $usuarioController->consult();
    }
}

if (isset($_POST['action'])) {
    $usuarioController = new ClientController();
    //Llamada a la Conexión
    require_once("../db/db.php");

    //Llamada al Modelo
    require_once("../models/client.php");
    $client = new Client();

    if (strcmp($_POST["action"], "register") == 0) {
        $nombre = $_POST["nombre"];
        $identificacion = $_POST["identificacion"];
        $contacto = $_POST["correo"];
        if (!empty($nombre) && !empty($identificacion) && !empty($contacto)) {
            $fields = "Nombre, Identificacion, Correo";
            $values = "'$nombre', '$identificacion', '$contacto'";
            $sql = "INSERT INTO cliente ($fields) VALUES ($values)";
            $usuarioController->register($sql);
        }
    }
}
