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

            $sql = $db->prepare("select   codigo_cliente as id, nombre_cliente as nombre, identificacion_fiscal as rfc,"
                ." name_alt_razon_social as razon_social, record_date as fecha_ingreso,"
                ." direccion_principal_1 as direccion_principal_1, direccion_principal_2 as direccion_principal_2, direccion_3 as direccion_principal_3,"
                ." noexterior_s as num_exterior, nointerior_s as num_interior, colonia_s as colonia, municipio_s as municipio,"
                ." localidad_s as localidad, codigo_ciudad as ciudad_id, codigo_estado as estado_id, codigo_pais as pais_id,"
                ." codigo_postal_principal as cp, telefono as telefono, telefono_2 as telefono_2, fax as fax,"
                ." email_fiscal as email_fiscal, e_mail as e_mail, codigo_cuenta_contable_cliente as cuenta_id,"
                ." tipo_moneda as moneda_id, terminos_de_pago_dias as dias_credito,"
                ." terminos_de_pago_alfa_num as termino_credito, limite_credito as limite_credito, balance as saldo,"
                ." balance_reserv1 as reserva, zona as zona_id, client_type as tipo_id, codigo_giro as giro_id, codigo_categoria as categoria_id,"
                ." codigo_sector as sector_id, localizacion_cliente as localizacion_id,salesman as vendedor_id, codigo_regimenfiscal as sat_regimen_fiscal_id"
                ." from     clnt_ficha_principal where empresa = 'CIMSA' and codigo_cliente = 'dfn-0042' ");

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
