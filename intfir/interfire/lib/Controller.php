<?php

include 'Connect.php';
include 'Util.php';

/**
 * Clase que contiene todas las operaciones utilizadas sobre la base de datos
 * @author Camilo Garzon Calle
 */
class Controller {

    private $conexion, $op, $idhash;
    private $UTILITY;
    private $DATE_NOW = 'DATE_ADD(NOW(),INTERVAL 2 HOUR)';
    private $response;

    function __construct() {
        $conexion = new Connect();
        $this->UTILITY = new Util();
        $this->conexion = $conexion->openConnect();
        $rqst = $_REQUEST;
        $this->op = $rqst['op'];

        if ($this->op == 'login') {
            $this->nick = $rqst['nick'];
            $this->pass = $rqst['pass'];
            $this->login();
        } else if ($this->op == 'save_user') {
            $this->nombre = $rqst['nombre'];
            $this->pass = $rqst['pass'];
            $this->email = $rqst['email'];
            $this->edad = $rqst['edad'];
            $this->sexo = $rqst['sexo'];
            $this->nickname = $rqst['nickname'];
            $this->pais_residencia = $rqst['pais_residencia'];
            $this->estatura = $rqst['estatura'];
            $this->save_user();
        } else {
            $this->invalid_method_called();
        }
    }

    /**
     * Mensaje de error cuando se llama una metodo no valido
     */
    private function invalid_method_called() {
        $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '1001', 'content' => 'Invalid method called.')));
        $this->response = ($arrjson);
    }

    /**
     * Metodo para encriptar password
     */
    private function make_hash_pass($param1, $param2) {
        if (strlen($param1) > 3 && strlen($param2) > 3) {
            $r = strtoupper(md5($param1 . $param2 . 'asdf'));
        } else {
            $r = strtoupper(md5($param1 . '0000' . 'asdf'));
        }
        return $r;
    }

    /**
     * Metodo para loguearse
     */
    private function login() {
        $resultado = 0;
        if ($this->nick == "" || $this->pass == "") {
            $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => ' Missing parameters.')));
        } else {
            $pass = $this->make_hash_pass($this->nick, $this->pass);
            $q = "SELECT * FROM fir_usuario WHERE usr_nick = '$this->nick' and usr_hashpass = '$pass' ";
            $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $resultado = mysql_num_rows($con);
            while ($obj = mysql_fetch_object($con)) {
                $arrjson = array('output' => array(
                        'valid' => true,
                        'id' => $obj->usr_id,
                        'empresa_id' => ($obj->fir_empresa_emp_id),
                        'sede_id' => $obj->fir_sede_sde_id,
                        'nombre' => $obj->usr_nombre,
                        'apellido' => $obj->usr_apellido,
                        'cargo' => $obj->usr_cargo,
                        'correo' => $obj->usr_correo,
                        'celular' => ($obj->usr_celular),
                        'foto' => $obj->usr_foto,
                        'nick' => $obj->usr_nick,
                        'rol' => $obj->usr_rol));
            }
            if ($resultado == 0) {
                $arrjson = array('output' => array('valid' => false, 'error' => "error en usuario o contraseña."));
            }
        }
        $this->response = ($arrjson);
    }

    /**
     * Metodo para guardar y actualizar usuarios
     */
    private function save_user() {
        //PRIMERO SE VERIFICA SI EL USUARIO QUE SE LOGUEA YA EXISTE.
        $resultado = 0;
        $id = 0;
        if (strlen($this->nick) > 3) {
            $q = "SELECT usr_id FROM fir_usuario WHERE usr_nick = '" . $this->nick . "' ";
            $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $resultado = mysql_num_rows($con);
            while ($obj = mysql_fetch_object($con)) {
                $id = $obj->usr_id;
            }
            $pass = $this->make_hash_pass($this->nick, $this->pass);
            $table = "fir_usuario";
            $arrfieldscomma = array('usr_nombre' => $this->nombre,
                'usr_apellido' => $this->apellido,
                'usr_cargo' => $this->cargo,
                'usr_correo' => $this->correo,
                'usr_celular' => $this->celular,
                'usr_foto' => $this->foto,
                'usr_hashpass' => $pass,
                'usr_nick' => $this->nick);

            $arrfieldsnocomma = array('fir_empresa_emp_id' => $this->empresa_id, 'fir_sede_sde_id' => $this->sede_id);
            $q = $this->UTILITY->make_query_update($table, "usr_id = '$id'", $arrfieldscomma, $arrfieldsnocomma);
            mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
        } else {
            $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => ' Missing parameters.')));
        }
        //SI NO EXISTE UN USUARIO, ENTONCES SE CREA
        if ($id == 0) {
            $pass = $this->make_hash_pass($this->nick, $this->pass);
            $q = "INSERT INTO fir_usuario (usr_nombre, usr_apellido, usr_cargo, usr_correo, usr_celular, usr_foto, usr_hashpass, usr_nick, fir_empresa_emp_id, fir_sede_sde_id) VALUES ('$this->nombre', '$this->apellido', '$this->cargo', '$this->correo', '$this->celular', '$this->foto', '$pass', '$this->nick', $this->empresa_id, $this->sede_id)";
            mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $id = mysql_insert_id();
        } else {
            $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '3002', 'content' => 'Account already exists.')));
        }
        $arrjson = array('output' => array('valid' => true, 'id' => $id));
        $this->response = ($arrjson);
    }

    public function getResponse() {
        return $this->response;
    }

    public function getResponseJSON() {
        return json_encode($this->response);
    }

}

//new Controller();
?>