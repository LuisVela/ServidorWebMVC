<?php
class Parking
{
    private $db;
    private $parking;
    private $vehicletype;

    public function __construct()
    {
        //Conexión BD
        $this->db = Connect::connection();
        $this->parking = array();
        $this->vehicletype = array();
    }

    public function getParking()
    {
        //Consulta de información de Parqueo
        $consulta = $this->db->query("SELECT c.Nombre, tv.Nombre AS Tipo, p.Placa, p.Ingreso, p.Salida
        FROM ((parking AS p
        INNER JOIN `client` AS c ON p.Cliente = c.Identificacion)
        INNER JOIN vehicletype AS tv ON p.Tipo = tv.Id);");
        while ($filas = $consulta->fetch_assoc()) {
            $this->parking[] = $filas;
        }
        return $this->parking;
    }

    public function getType()
    {
        //Consulta de información de Tipo de Vehiculo para Llenar el Combo
        $consulta = $this->db->query("SELECT * FROM vehicletype");
        //Consulta del número de filas de la consulta
        $array_num = mysqli_num_rows($consulta);
        for ($i = 0; $i < $array_num; ++$i) {
            $this->vehicletype[$i] = $consulta->fetch_assoc();
        }
        mysqli_close($this->db);
        return $this->vehicletype;
    }

    public function setParking($sql)
    {
        //Registro de información de Parqueo
        return mysqli_query($this->db, $sql);
    }
}
