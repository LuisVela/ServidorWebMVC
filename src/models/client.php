<?php
class Client
{
    private $db;
    private $client;

    public function __construct()
    {
        //Conexión BD
        $this->db = Connect::connection();
        $this->client = array();
    }

    public function getClient()
    {
        //Consulta de información de los clientes registrados
        $consulta = $this->db->query("SELECT * FROM client;");

        $filas = $consulta->fetch_assoc();
        do {
            $this->client[] = $filas;
        } while ($filas = $consulta->fetch_assoc());

        mysqli_close($this->db);
        return $this->client;
    }

    public function setClient($sql)
    {
        //Sentencia para crear un cliente
        return mysqli_query($this->db, $sql);
    }
}
