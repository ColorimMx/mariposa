<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use config\Mba3;
use PDO;

class Mba3ProductoMarcaCatalogo extends Model
{
    use HasFactory;

    public function get_marcas(){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("SELECT CODE AS ID,DESCRIPTION_SPN AS NOMBRE, '1' AS ACTIVO"
                ." FROM SIST_Lista_6 WHERE CORP = 'CIMSA' AND GROUP_CATEGORY = 'MARCAPROD'");

            $sql->execute();

            $marcas=$sql->fetchAll(PDO::FETCH_CLASS);

            return $marcas;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }
}
