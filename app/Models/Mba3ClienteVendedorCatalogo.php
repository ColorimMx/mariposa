<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use  config\Mba3;
use PDO;


class Mba3ClienteVendedorCatalogo extends Model
{
    use HasFactory;

    public function get_vendedor(){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("SELECT CODE AS id, DESCRIPTION_SPN AS nombre, '1' AS activo"
                ." FROM SIST_Lista_1 WHERE GROUP_CATEGORY = 'SELLm' ");

            $sql->execute();

            $vendedores=$sql->fetchAll(PDO::FETCH_CLASS);

            return $vendedores;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }
}
