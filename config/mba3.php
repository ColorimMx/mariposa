<?php
namespace config;
use PDO;
class Mba3
{


    //private $dsn = "4D:host=100.48.0.7";
    private $dsn = "odbc:64MBA3PRUEBAS";
    private $usr = "ODBC";
    private $pass = "ODBC";
    //private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;

    public function openMba3()
    {
        try{
            $this->con = new PDO($this->dsn,$this->usr,$this->pass);

            return $this->con;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }

    public function closeMba3() {
        $this->con = null;
    }
}
