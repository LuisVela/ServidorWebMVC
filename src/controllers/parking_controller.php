<?php
class ParkingController
{
    public function __construct()
    {
        //Por defecto
    }

    public function consult()
    {
        $park = new Parking();
        $datos = $park->getParking();
        $result = $park->getType();
        if ($datos != null && $result) {
            # code... Para continuar en otro ejercicio
        }
        //Llamada a la vista
        require_once("src/views/parking_view.php");
    }

    public function register($sql)
    {
        $park = new Parking();
        $datos = $park->setParking($sql);
        if ($datos != null) {
            # code... Para continuar en otro ejercicio
        }
        header("Location: ../../?menu=Registro%20Parqueo");
    }
}

if (isset($_GET['action'])) {
    $parkController = new ParkingController();

    //Llamada a la Conexión
    require_once("src/db/db.php");

    //Llamada al Modelo
    require_once("src/models/parking.php");

    $parkController->consult();
}

if (isset($_POST['action'])) {
    $parkController = new ParkingController();
    //Llamada a la Conexión
    require_once("../db/db.php");

    //Llamada al Modelo
    require_once("../models/parking.php");
    $parking = new Parking();

    if (strcmp($_POST["action"], "register") == 0) {

        // Form data
        $identificacion = $_POST["identificacion"];
        $tipoVehiculo = $_POST["tipo_vehiculo"];
        $placa = $_POST["placa"];
        $ingreso = $_POST["ingreso"];
        $salida = $_POST["salida"]; //optional

        if (!empty($identificacion) && !empty($tipoVehiculo) && !empty($placa) && !empty($ingreso)) {
            $fields = "Cliente, Tipo, Placa, Ingreso";
            $values = "'$identificacion', '$tipoVehiculo', '$placa', '$ingreso'";
            if (!empty($salida)) {
                $fields = $fields . ", Salida";
                $values = $values . ", '$salida'";
            }
            $sql = "INSERT INTO parking ($fields) VALUES ($values)";
            $parkController->register($sql);
        }
    }
}
