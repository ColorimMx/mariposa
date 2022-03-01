<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

use config\Mba3;
use PDO;

class Mba3ProductoSubgrupoCatalogo
{
    public function get_subgrupos(){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("SELECT `SUB GROUP CODE` AS id,DESCRIPTION AS nombre, '1' AS activo"
                ." FROM INVT_Grupo_Subgrupo_Lista WHERE CORP = 'CIMSA' AND `SUB GROUP` = TRUE AND TYPE = 'PRODU'");

            $sql->execute();

            $subgrupos=$sql->fetchAll(PDO::FETCH_CLASS);

            return $subgrupos;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }
}
