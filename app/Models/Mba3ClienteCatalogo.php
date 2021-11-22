<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use  config\Mba3;
use PDO;


class Mba3ClienteCatalogo
{


    public function get_clientes(){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("SELECT   codigo_cliente as id, nombre_cliente as nombre, identificacion_fiscal as rfc, "
                ."name_alt_razon_social as razon_social, inactivo as inactivo, record_date as fecha_ingreso, "
                ." direccion_principal_1 as direccion_principal_1,direccion_principal_2 as direccion_principal_2, direccion_3 as direccion_principal_3, "
                ."  noexterior_s as num_exterior, nointerior_s as num_interior, colonia_s as colonia, municipio_s as municipio, "
                ."  localidad_s as localidad, codigo_ciudad as id_ciudad, codigo_estado as id_estado, codigo_pais as id_pais, zona as id_zona, "
                ."  codigo_postal_principal as cp, telefono as telefono, telefono_2 as telefono_2, fax as fax, "
                ."  email_fiscal as email_fiscal, e_mail as e_mail, codigo_cuenta_contable_cliente as id_cuenta, "
                ."  tipo_moneda as id_moneda, terminos_de_pago_dias as dias_credito, "
                ."  terminos_de_pago_alfa_num as termino_credito, limite_credito as limite_credito, balance as saldo, "
                ."  balance_reserv1 as reserva, client_type as id_tipo, codigo_giro as id_giro, codigo_categoria as id_categoria, "
                ."   codigo_sector as id_sector, localizacion_cliente as id_localizacion,salesman as id_vendedor,current_date ( ) as fecha_mod "
                ." FROM     clnt_ficha_principal "
                ." WHERE empresa = 'cimsa'");

            $sql->execute();

            $clientes=$sql->fetchAll(PDO::FETCH_CLASS);

            return $clientes;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }
}
