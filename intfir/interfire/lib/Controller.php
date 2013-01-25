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
        $this->id = intval($rqst['id']);

        if ($this->op == 'login') {
            $this->nick = $rqst['nick'];
            $this->pass = $rqst['pass'];
            $this->login();
        } else if ($this->op == 'usuario_save') {
            $this->nombre = $rqst['nombre'];
            $this->apellido = $rqst['apellido'];
            $this->nick = $rqst['nick'];
            $this->pass = $rqst['pass'];
            $this->cargo = $rqst['cargo'];
            $this->correo = $rqst['correo'];
            $this->celular = $rqst['celular'];
            $this->foto = $rqst['foto'];
            $this->rol = $rqst['rol'];
            $this->usuario_save();
        } else if ($this->op == 'usuario_delete') {
            
        } else if ($this->op == 'empresa_get') {
            $this->empresa_get();
        } else if ($this->op == 'empresa_save') {
            $this->nit = $rqst['nit'];
            $this->razonsocial = $rqst['razonsocial'];
            $this->ciudad = $rqst['ciudad'];
            $this->direccion = $rqst['direccion'];
            $this->telefono = $rqst['telefono'];
            $this->celular = $rqst['celular'];
            $this->contacto = $rqst['contacto'];
            $this->correo = $rqst['correo'];
            $this->descripcion = $rqst['descripcion'];
            $this->logo = $rqst['logo'];
            $this->empresa_save();
        } else if ($this->op == 'empresa_delete') {
            $this->empresa_delete();
        } else if ($this->op == 'sede_get') {
            $this->sede_get();
        } else if ($this->op == 'sede_save') {
            $this->empresa_id = $rqst['empresa_id'];
            $this->nombre = $rqst['nombre'];
            $this->direccion = $rqst['direccion'];
            $this->telefono = $rqst['telefono'];
            $this->celular = $rqst['celular'];
            $this->contacto = $rqst['contacto'];
            $this->correo = $rqst['correo'];
            $this->sede_save();
        } else if ($this->op == 'sede_delete') {
            
        } else {
            $this->invalid_method_called();
        }
    }

    /**
     * Mensaje de error cuando se llama una metodo no valido
     */
    private function invalid_method_called() {
        $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '1001', 'content' => 'Metodo no existe.')));
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
            $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => ' Faltan datos.')));
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
                        'nombre' => utf8_encode($obj->usr_nombre),
                        'apellido' => utf8_encode($obj->usr_apellido),
                        'cargo' => $obj->usr_cargo,
                        'correo' => $obj->usr_correo,
                        'celular' => ($obj->usr_celular),
                        'foto' => $obj->usr_foto,
                        'nick' => $obj->usr_nick,
                        'rol' => $obj->usr_rol));
            }
            if ($resultado == 0) {
                $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => 'error en usuario o contraseña.')));
            }
        }
        $this->response = ($arrjson);
    }

    /**
     * Metodo para guardar y actualizar usuarios
     */
    private function usuario_save() {
        $id = 0;
        //consulta la existencia del usuario
        $q = "SELECT usr_id FROM fir_usuario WHERE usr_nick = '" . $this->nick;
        $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
        $resultado = mysql_num_rows($con);
        if ($this->id > 0) {
            //actualiza la informacion
            if (strlen($this->nick) > 3) {
                $q = "SELECT usr_id FROM fir_usuario WHERE usr_id = " . $this->id;
                $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
                while ($obj = mysql_fetch_object($con)) {
                    $id = $obj->usr_id;
                    $pass = $this->make_hash_pass($this->nick, $this->pass);
                    $table = "fir_usuario";
                    $arrfieldscomma = array('usr_nombre' => $this->nombre,
                        'usr_apellido' => $this->apellido,
                        'usr_cargo' => $this->cargo,
                        'usr_correo' => $this->correo,
                        'usr_celular' => $this->celular,
                        'usr_foto' => $this->foto,
                        'usr_hashpass' => $pass,
                        'usr_nick' => $this->nick,
                        'usr_rol' => $this->rol);
                    $arrfieldsnocomma = array('fir_empresa_emp_id' => $this->empresa_id, 'fir_sede_sde_id' => $this->sede_id);
                    $q = $this->UTILITY->make_query_update($table, "usr_id = '$id'", $arrfieldscomma, $arrfieldsnocomma);
                    mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
                    $arrjson = array('output' => array('valid' => true, 'id' => $id));
                }
            } else {
                $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => ' Faltan datos.')));
            }
        } else {
            if ($resultado == 0) {
                //crea el nuevo usuario
                $pass = $this->make_hash_pass($this->nick, $this->pass);
                $q = "INSERT INTO fir_usuario (usr_nombre, usr_apellido, usr_cargo, usr_correo, usr_celular, usr_foto, usr_hashpass, usr_nick, fir_empresa_emp_id, fir_sede_sde_id, usr_rol) VALUES ('$this->nombre', '$this->apellido', '$this->cargo', '$this->correo', '$this->celular', '$this->foto', '$pass', '$this->nick', $this->empresa_id, $this->sede_id, '$this->rol')";
                mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
                $id = mysql_insert_id();
                $arrjson = array('output' => array('valid' => true, 'id' => $id));
            } else {
                $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '3002', 'content' => 'ya existe.')));
            }
        }
        $this->response = ($arrjson);
    }

    /**
     * Metodo para consultar empresas
     */
    public function empresa_get() {
        $q = "SELECT * FROM fir_empresa ORDER BY emp_razonsocial";
        if ($this->id > 0) {
            $q = "SELECT * FROM fir_empresa WHERE emp_id = " . $this->id;
        }
        $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
        $resultado = mysql_num_rows($con);
        $arr = array();
        while ($obj = mysql_fetch_object($con)) {
            $arr[] = array(
                'id' => $obj->emp_id,
                'nit' => $obj->emp_nit,
                'razonsocial' => utf8_encode($obj->emp_razonsocial),
                'ciudad' => utf8_encode($obj->emp_ciudad),
                'direccion' => utf8_encode($obj->emp_direccion),
                'telefono' => $obj->emp_telefono,
                'celular' => $obj->emp_celular,
                'contacto' => utf8_encode($obj->emp_contacto),
                'correo' => $obj->emp_correo,
                'descripcion' => utf8_encode($obj->emp_descripcion),
                'logo' => $obj->emp_logo);
        }
        if ($resultado > 0) {
            $arrjson = array('output' => array('valid' => true, 'response' => $arr));
        } else {
            $arrjson = array('output' => array('valid' => FALSE, 'response' => array('code' => '2001', 'content' => 'Sin resultados')));
        }
        $this->response = ($arrjson);
    }

    /**
     * Metodo para guardar y actualizar empresas
     */
    private function empresa_save() {
        $id = 0;
        //consulta la existencia
        $q = "SELECT emp_id FROM fir_empresa WHERE emp_nit = '" . $this->nit . "' ";
        $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
        $resultado = mysql_num_rows($con);
        if ($this->id > 0) {
            //actualiza la informacion
            if (strlen($this->nit) > 3) {
                $q = "SELECT emp_id FROM fir_empresa WHERE emp_id = " . $this->id;
                $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
                while ($obj = mysql_fetch_object($con)) {
                    $id = $obj->emp_id;
                    $table = "fir_empresa";
                    $arrfieldscomma = array('emp_nit' => $this->nit,
                        'emp_razonsocial' => $this->razonsocial,
                        'emp_ciudad' => $this->ciudad,
                        'emp_direccion' => $this->direccion,
                        'emp_telefono' => $this->telefono,
                        'emp_celular' => $this->celular,
                        'emp_contacto' => $this->contacto,
                        'emp_correo' => $this->correo,
                        'emp_descripcion' => $this->descripcion,
                        'emp_logo' => $this->logo);
                    $arrfieldsnocomma = array();
                    $q = $this->UTILITY->make_query_update($table, "emp_id = '$id'", $arrfieldscomma, $arrfieldsnocomma);
                    mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
                    $arrjson = array('output' => array('valid' => true, 'id' => $id));
                }
            } else {
                $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => ' Faltan datos.')));
            }
        } else {
            if ($resultado == 0) {
                $q = "INSERT INTO fir_empresa (emp_nit, emp_razonsocial, emp_ciudad, emp_direccion, emp_telefono, emp_celular, emp_contacto, emp_correo, emp_descripcion, emp_logo) VALUES ('$this->nit', '$this->razonsocial', '$this->ciudad', '$this->direccion', '$this->telefono', '$this->celular', '$this->contacto', '$this->correo', '$this->descripcion', '$this->logo')";
                mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
                $id = mysql_insert_id();
                $arrjson = array('output' => array('valid' => true, 'id' => $id));
            } else {
                $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '3002', 'content' => 'ya existe.')));
            }
        }
        $this->response = ($arrjson);
    }

    private function empresa_delete() {
        if ($this->id > 0) {
            //actualiza la informacion
            $q = "DELETE FROM fir_empresa WHERE emp_id = " . $this->id;
            mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $arrjson = array('output' => array('valid' => true, 'id' => $this->id));
        } else {
            $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => ' Faltan datos.')));
        }
        $this->response = ($arrjson);
    }

    /**
     * Metodo para consultar empresas
     */
    public function sede_get() {
        $q = "SELECT sde_id, sde_nombre, sde_direccion, sde_telefono, sde_celular, sde_contacto, sde_correo, emp_razonsocial FROM fir_sede, fir_empresa WHERE fir_empresa_emp_id = emp_id ORDER BY sde_nombre ";
        if ($this->id > 0) {
            $q = "SELECT sde_id, sde_nombre, sde_direccion, sde_telefono, sde_celular, sde_contacto, sde_correo, fir_empresa_emp_id, emp_razonsocial FROM fir_sede, fir_empresa WHERE fir_empresa_emp_id = emp_id AND sde_id = " . $this->id;
        }
        $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
        $resultado = mysql_num_rows($con);
        $arr = array();
        while ($obj = mysql_fetch_object($con)) {
            $arr[] = array(
                'id' => $obj->sde_id,
                'empresa_id' => $obj->fir_empresa_emp_id,
                'empresa_razonsocial' => $obj->emp_razonsocial,
                'nombre' => utf8_encode($obj->sde_nombre),
                'direccion' => utf8_encode($obj->sde_direccion),
                'telefono' => $obj->sde_telefono,
                'celular' => $obj->sde_celular,
                'contacto' => utf8_encode($obj->sde_contacto),
                'correo' => $obj->sde_correo);
        }
        if ($resultado > 0) {
            $arrjson = array('output' => array('valid' => true, 'response' => $arr));
        } else {
            $arrjson = array('output' => array('valid' => FALSE, 'response' => array('code' => '2001', 'content' => 'Sin resultados')));
        }
        $this->response = ($arrjson);
    }

    /**
     * Metodo para guardar y actualizar empresas
     */
    private function sede_save() {
        $id = 0;
        if ($this->id > 0) {
            //actualiza la informacion
            $q = "SELECT sde_id FROM fir_sede WHERE emp_id = " . $this->id;
            $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            while ($obj = mysql_fetch_object($con)) {
                $id = $obj->sde_id;
                $table = "fir_empresa";
                $arrfieldscomma = array('sde_nombre' => $this->nombre,
                    'sde_direccion' => $this->direccion,
                    'sde_telefono' => $this->telefono,
                    'sde_celular' => $this->celular,
                    'sde_contacto' => $this->contacto,
                    'sde_correo' => $this->correo);
                $arrfieldsnocomma = array('fir_empresa_emp_id' => $this->empresa_id);
                $q = $this->UTILITY->make_query_update($table, "sde_id = '$id'", $arrfieldscomma, $arrfieldsnocomma);
                mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
                $arrjson = array('output' => array('valid' => true, 'id' => $id));
            }
        } else {
            $q = "INSERT INTO fir_empresa (sde_nombre, sde_direccion, sde_telefono, sde_celular, sde_contacto, emp_correo, fir_empresa_emp_id) VALUES ('$this->nombre', '$this->direccion', '$this->telefono', '$this->celular', '$this->contacto', '$this->correo', $this->empresa_id)";
            mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $id = mysql_insert_id();
            $arrjson = array('output' => array('valid' => true, 'id' => $id));
        }
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