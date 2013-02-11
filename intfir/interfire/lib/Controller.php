<?php

include 'Connect.php';
include 'Util.php';

/**
 * Clase que contiene todas las operaciones utilizadas sobre la base de datos
 * @author Camilo Garzon Calle
 */
class Controller {

    private $conexion, $op, $id, $euid, $sdid;
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
        } else if ($this->op == 'usuario_get') {
            $this->usuario_get();
        } else if ($this->op == 'usuario_save') {
            $this->euid = $rqst['euid'];
            $this->sdid = $rqst['sdid'];
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
        } else if ($this->op == 'usuario_check') {
            $this->nick = $rqst['nick'];
            $this->usuario_check();
        } else if ($this->op == 'usuario_delete') {
            $this->usuario_delete();
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
            $this->euid = $rqst['euid'];
            $this->sede_get();
        } else if ($this->op == 'sede_save') {
            $this->euid = $rqst['euid'];
            $this->nombre = $rqst['nombre'];
            $this->direccion = $rqst['direccion'];
            $this->telefono = $rqst['telefono'];
            $this->celular = $rqst['celular'];
            $this->contacto = $rqst['contacto'];
            $this->correo = $rqst['correo'];
            $this->sede_save();
        } else if ($this->op == 'sede_delete') {
            $this->sede_delete();
        } else if ($this->op == 'sistemas_get') {
            $this->sistemas_get();
        } else if ($this->op == 'equipo_get') {
            $this->euid = $rqst['euid'];
            $this->sdid = $rqst['sdid'];
            $this->catid = $rqst['catid'];
            $this->equipo_get();
        } else if ($this->op == 'equipo_save') {
            $this->euid = $rqst['euid'];
            $this->sdid = $rqst['sdid'];
            $this->catid = $rqst['catid'];
            $this->nombre = $rqst['nombre'];
            $this->marca = $rqst['marca'];
            $this->numinventario = $rqst['numinventario'];
            $this->equipo_save();
        } else if ($this->op == 'equipo_delete') {
            $this->equipo_delete();
        } else if ($this->op == 'numinventario_check') {
            $this->numinventario = $rqst['numinventario'];
            $this->numinventario_check();
        } else if ($this->op == 'evaluacion_save') {
            $this->sdid = $rqst['sdid'];
            $this->proid = $rqst['proid'];
            $this->pronum = $rqst['pronum'];
            $this->usrid = $rqst['usrid'];
            $this->form = $rqst['form'];
            $this->fecha = $rqst['fecha'];
            $this->sist = $rqst['sist'];
            $this->activ = $rqst['activ'];
            $this->content = $rqst['content'];
            $this->nota = $rqst['nota'];
            $this->evaluacion_save();
        } else if ($this->op == 'evaluacion_get') {
            $this->sdid = $rqst['sdid'];
            $this->fecha = $rqst['fecha'];
            $this->pronum = $rqst['pronum'];
            $this->form = $rqst['form'];
            $this->evaluacion_get();
        } else {
            $this->invalid_method_called();
        }
//        $conexion->closeConnect();
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
                        'euid' => ($obj->fir_empresa_emp_id),
                        'sdid' => $obj->fir_sede_sde_id,
                        'nombre' => ($obj->usr_nombre),
                        'apellido' => ($obj->usr_apellido),
                        'cargo' => ($obj->usr_cargo),
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

    public function usuario_get() {
        $q = "SELECT * FROM fir_usuario ORDER BY usr_nombre, usr_apellido, usr_cargo";
        if ($this->id > 0) {
            $q = "SELECT * FROM fir_usuario WHERE usr_id = " . $this->id;
        }
        if ($this->sdid > 0) {
            $q = "SELECT * FROM fir_usuario WHERE fir_sede_sde_id = " . $this->sdid;
        }
        if ($this->euid > 0) {
            $q = "SELECT * FROM fir_usuario WHERE fir_empresa_emp_id = " . $this->euid;
        }
        $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
        $resultado = mysql_num_rows($con);
        $arr = array();
        while ($obj = mysql_fetch_object($con)) {
            $nom_sede = 'ninguna';
            $nom_empresa = 'ninguna';
            $q2 = "SELECT sde_nombre FROM fir_sede WHERE sde_id = " . $obj->fir_sede_sde_id;
            $con2 = mysql_query($q2, $this->conexion) or die(mysql_error() . "***ERROR: " . $q2);
            while ($obj2 = mysql_fetch_object($con2)) {
                $nom_sede = $obj2->sde_nombre;
            }
            $q3 = "SELECT emp_razonsocial FROM fir_empresa WHERE emp_id = " . $obj->fir_empresa_emp_id;
            $con3 = mysql_query($q3, $this->conexion) or die(mysql_error() . "***ERROR: " . $q3);
            while ($obj3 = mysql_fetch_object($con3)) {
                $nom_empresa = $obj3->emp_razonsocial;
            }
            $arr[] = array(
                'id' => $obj->usr_id,
                'euid' => ($obj->fir_empresa_emp_id),
                'empresa_razonsocial' => ($nom_empresa),
                'sdid' => $obj->fir_sede_sde_id,
                'sede_nombre' => ($nom_sede),
                'nombre' => ($obj->usr_nombre),
                'apellido' => ($obj->usr_apellido),
                'cargo' => ($obj->usr_cargo),
                'correo' => $obj->usr_correo,
                'celular' => ($obj->usr_celular),
                'foto' => $obj->usr_foto,
                'nick' => $obj->usr_nick,
                'rol' => $obj->usr_rol);
        }
        if ($resultado > 0) {
            $arrjson = array('output' => array('valid' => true, 'response' => $arr));
        } else {
            $arrjson = array('output' => array('valid' => FALSE, 'response' => array('code' => '2001', 'content' => 'Sin resultados')));
        }
        $this->response = ($arrjson);
    }

    /**
     * Metodo para guardar y actualizar usuarios
     */
    private function usuario_save() {
        $id = 0;
        //consulta la existencia del usuario
        $q = "SELECT usr_id FROM fir_usuario WHERE usr_nick = '" . $this->nick . "' ";
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
                    $arrfieldsnocomma = array('fir_empresa_emp_id' => $this->euid, 'fir_sede_sde_id' => $this->sdid);
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
                $q = "INSERT INTO fir_usuario (usr_nombre, usr_apellido, usr_cargo, usr_correo, usr_celular, usr_foto, usr_hashpass, usr_nick, fir_empresa_emp_id, fir_sede_sde_id, usr_rol) VALUES ('$this->nombre', '$this->apellido', '$this->cargo', '$this->correo', '$this->celular', '$this->foto', '$pass', '$this->nick', $this->euid, $this->sdid, '$this->rol')";
                mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
                $id = mysql_insert_id();
                $arrjson = array('output' => array('valid' => true, 'id' => $id));
            } else {
                $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '3002', 'content' => 'ya existe.')));
            }
        }
        $this->response = ($arrjson);
    }

    private function usuario_delete() {
        if ($this->id > 0) {
            //actualiza la informacion
            $q = "DELETE FROM fir_usuario WHERE usr_id = " . $this->id;
            mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $arrjson = array('output' => array('valid' => true, 'id' => $this->id));
        } else {
            $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => ' Faltan datos.')));
        }
        $this->response = ($arrjson);
    }

    public function usuario_check() {
        $id = 0;
        if (strlen($this->nick) > 3) {
            $q = "SELECT usr_id FROM fir_usuario WHERE usr_nick = '" . $this->nick . "' ";
            $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            while ($obj = mysql_fetch_object($con)) {
                $id = $obj->usr_id;
            }
            $arrjson = array('output' => array('valid' => true, 'id' => $id));
        } else {
            $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => ' Faltan datos.')));
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
                'razonsocial' => ($obj->emp_razonsocial),
                'ciudad' => ($obj->emp_ciudad),
                'direccion' => ($obj->emp_direccion),
                'telefono' => $obj->emp_telefono,
                'celular' => $obj->emp_celular,
                'contacto' => ($obj->emp_contacto),
                'correo' => $obj->emp_correo,
                'descripcion' => ($obj->emp_descripcion),
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
        if ($this->euid > 0) {
            $q = "SELECT sde_id, sde_nombre, sde_direccion, sde_telefono, sde_celular, sde_contacto, sde_correo, fir_empresa_emp_id, emp_razonsocial FROM fir_sede, fir_empresa WHERE fir_empresa_emp_id = emp_id AND emp_id = " . $this->euid;
        }
        $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
        $resultado = mysql_num_rows($con);
        $arr = array();
        while ($obj = mysql_fetch_object($con)) {
            $arr[] = array(
                'id' => $obj->sde_id,
                'euid' => $obj->fir_empresa_emp_id,
                'empresa_razonsocial' => ($obj->emp_razonsocial),
                'nombre' => ($obj->sde_nombre),
                'direccion' => ($obj->sde_direccion),
                'telefono' => $obj->sde_telefono,
                'celular' => $obj->sde_celular,
                'contacto' => ($obj->sde_contacto),
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
            $q = "SELECT sde_id FROM fir_sede WHERE sde_id = " . $this->id;
            $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            while ($obj = mysql_fetch_object($con)) {
                $id = $obj->sde_id;
                $table = "fir_sede";
                $arrfieldscomma = array('sde_nombre' => $this->nombre,
                    'sde_direccion' => $this->direccion,
                    'sde_telefono' => $this->telefono,
                    'sde_celular' => $this->celular,
                    'sde_contacto' => $this->contacto,
                    'sde_correo' => $this->correo);
                $arrfieldsnocomma = array('fir_empresa_emp_id' => $this->euid);
                $q = $this->UTILITY->make_query_update($table, "sde_id = '$id'", $arrfieldscomma, $arrfieldsnocomma);
                mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
                $arrjson = array('output' => array('valid' => true, 'id' => $id));
            }
        } else {
            $q = "INSERT INTO fir_sede (sde_nombre, sde_direccion, sde_telefono, sde_celular, sde_contacto, sde_correo, fir_empresa_emp_id) VALUES ('$this->nombre', '$this->direccion', '$this->telefono', '$this->celular', '$this->contacto', '$this->correo', $this->euid)";
            mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $id = mysql_insert_id();
            $arrjson = array('output' => array('valid' => true, 'id' => $id));
        }
        $this->response = ($arrjson);
    }

    private function sede_delete() {
        if ($this->id > 0) {
            //actualiza la informacion
            $q = "DELETE FROM fir_sede WHERE sde_id = " . $this->id;
            mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $arrjson = array('output' => array('valid' => true, 'id' => $this->id));
        } else {
            $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => ' Faltan datos.')));
        }
        $this->response = ($arrjson);
    }

    public function sistemas_get() {
        $q = "SELECT * FROM fir_categoria ORDER BY cat_alias ASC";
        $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
        $resultado = mysql_num_rows($con);
        $arr = array();
        while ($obj = mysql_fetch_object($con)) {
            $arr[] = array(
                'id' => $obj->cat_id,
                'nombre' => $obj->cat_nombre,
                'href' => $obj->cat_href_file,
                'alias' => utf8_encode($obj->cat_alias));
        }
        if ($resultado > 0) {
            $arrjson = array('output' => array('valid' => true, 'response' => $arr));
        } else {
            $arrjson = array('output' => array('valid' => FALSE, 'response' => array('code' => '2001', 'content' => 'Sin resultados')));
        }
        $this->response = ($arrjson);
    }

    /**
     * Metodo para guardar y actualizar
     */
    private function equipo_save() {
        $id = 0;
        $numeroinventario = $this->euid."-".$this->sdid."-";
        if ($this->id > 0) {
            //actualiza la informacion
            $q = "SELECT pro_id FROM fir_producto WHERE pro_id = " . $this->id;
            $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            while ($obj = mysql_fetch_object($con)) {
                $id = $obj->pro_id;
                $numeroinventario = $numeroinventario.$id;
                $table = "fir_producto";
                $arrfieldscomma = array('pro_nombre' => $this->nombre,
                    'pro_marca' => $this->marca,
                    'pro_numinventario' => $numeroinventario);
                $arrfieldsnocomma = array('fir_sede_sde_id' => $this->sdid, 'fir_categoria_cat_id' => $this->catid, 'fir_empresa_emp_id' => $this->euid);
                $q = $this->UTILITY->make_query_update($table, "pro_id = '$id'", $arrfieldscomma, $arrfieldsnocomma);
                mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
                $arrjson = array('output' => array('valid' => true, 'id' => $id));
            }
        } else {
            $q = "INSERT INTO fir_producto (pro_nombre, pro_marca, pro_numinventario, fir_sede_sde_id, fir_categoria_cat_id, fir_empresa_emp_id) VALUES ('$this->nombre', '$this->marca', '$this->numinventario', $this->sdid, $this->catid, $this->euid)";
            mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $id = mysql_insert_id();
            $numeroinventario = $numeroinventario.$id;
            $q = "UPDATE fir_producto SET pro_numinventario = '".$numeroinventario."' WHERE pro_id = ".$id;
            mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $arrjson = array('output' => array('valid' => true, 'id' => $id));
        }
        $this->response = ($arrjson);
    }

    private function equipo_delete() {
        if ($this->id > 0) {
            //actualiza la informacion
            $q = "DELETE FROM fir_producto WHERE pro_id = " . $this->id;
            mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $arrjson = array('output' => array('valid' => true, 'id' => $this->id));
        } else {
            $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => ' Faltan datos.')));
        }
        $this->response = ($arrjson);
    }

    public function equipo_get() {
        $q = "SELECT * FROM fir_producto ORDER BY pro_id ASC";
        if ($this->id > 0) {
            $q = "SELECT * FROM fir_producto WHERE pro_id = " . $this->id;
        }
        if ($this->sdid > 0) {
            $q = "SELECT * FROM fir_producto WHERE fir_sede_sde_id = " . $this->sdid;
        }
        if ($this->euid > 0) {
            $q = "SELECT * FROM fir_producto WHERE fir_empresa_emp_id = " . $this->euid;
        }
        if ($this->catid > 0) {
            $q = "SELECT * FROM fir_producto WHERE fir_categoria_cat_id = " . $this->catid;
        }
        if ($this->catid > 0 && $this->sdid > 0) {
            $q = "SELECT * FROM fir_producto WHERE fir_categoria_cat_id = " . $this->catid . " AND fir_sede_sde_id = " . $this->sdid;
        }
        if ($this->catid > 0 && $this->euid > 0) {
            $q = "SELECT * FROM fir_producto WHERE fir_categoria_cat_id = " . $this->catid . " AND fir_empresa_emp_id = " . $this->euid;
        }
        $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
        $resultado = mysql_num_rows($con);
        $arr = array();
        while ($obj = mysql_fetch_object($con)) {
            $nom_sistema = 'ninguno';
            $nom_href = '';
            $q2 = "SELECT * FROM fir_categoria WHERE cat_id = " . $obj->fir_categoria_cat_id;
            $con2 = mysql_query($q2, $this->conexion) or die(mysql_error() . "***ERROR: " . $q2);
            while ($obj2 = mysql_fetch_object($con2)) {
                $nom_sistema = utf8_encode($obj2->cat_alias);
                $nom_href = utf8_encode($obj2->cat_href_file);
            }
            $arr[] = array(
                'id' => $obj->pro_id,
                'euid' => $obj->fir_empresa_emp_id,
                'sdid' => $obj->fir_sede_sde_id,
                'catid' => ($obj->fir_categoria_cat_id),
                'nombre' => ($obj->pro_nombre),
                'marca' => ($obj->pro_marca),
                'numinventario' => $obj->pro_numinventario,
                'href' => $nom_href,
                'sistema' => $nom_sistema);
        }
        if ($resultado > 0) {
            $arrjson = array('output' => array('valid' => true, 'response' => $arr));
        } else {
            $arrjson = array('output' => array('valid' => FALSE, 'response' => array('code' => '2001', 'content' => 'Sin resultados')));
        }
        $this->response = ($arrjson);
    }
    
    public function numinventario_check() {
        $id = 0;
        if (strlen($this->numinventario) > 1) {
            $q = "SELECT pro_id FROM fir_producto WHERE pro_numinventario = '" . $this->numinventario . "' ";
            $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            while ($obj = mysql_fetch_object($con)) {
                $id = $obj->pro_id;
            }
            $arrjson = array('output' => array('valid' => true, 'id' => $id));
        } else {
            $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => ' Faltan datos.')));
        }
        $this->response = ($arrjson);
    }
    
    public function evaluacion_save(){
        $id = 0;
        if ($this->id > 0) {
            //actualiza la informacion
            $q = "SELECT eva_id FROM fir_evaluacion WHERE eva_id = " . $this->id;
            $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            while ($obj = mysql_fetch_object($con)) {
                $id = $obj->eva_id;
                $table = "fir_evaluacion";
                $arrfieldscomma = array('eva_form_name' => $this->form,
                    'eva_pro_numinventario' => $this->pronum,
                    'eva_sistema' => $this->sist,
                    'eva_actividad' => $this->activ,
                    'eva_contenido' => $this->content,
                    'eva_notas' => $this->nota,
                    'eva_fecha' => $this->fecha);
                $arrfieldsnocomma = array('fir_sede_sde_id' => $this->sdid, 
                    'fir_producto_pro_id' => $this->proid, 
                    'fir_usuario_usr_id' => $this->usrid);
                $q = $this->UTILITY->make_query_update($table, "eva_id = '$id'", $arrfieldscomma, $arrfieldsnocomma);
                mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
                $arrjson = array('output' => array('valid' => true, 'id' => $id));
            }
        } else {
            //$q = "INSERT INTO `fir_evaluacion` (`fir_usuario_usr_id` ,`fir_sede_sde_id` ,`fir_producto_pro_id` ,`eva_form_name` ,`eva_sistema` ,`eva_actividad` ,`eva_contenido` ,`eva_notas` ,`eva_fecha` ,`eva_fecha_hora` ,`eva_pro_numinventario`) 
            $q = "INSERT INTO `fir_evaluacion` (`fir_usuario_usr_id` ,`fir_sede_sde_id` ,`eva_form_name` ,`eva_sistema` ,`eva_actividad` ,`eva_contenido` ,`eva_notas` ,`eva_fecha` ,`eva_fecha_hora` ,`eva_pro_numinventario`) VALUES ($this->usrid, $this->sdid, '$this->form',  '$this->sist',  '$this->activ',  '$this->content',  '$this->nota', '$this->fecha', NOW(), '$this->pronum')";
            mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $id = mysql_insert_id();
            $arrjson = array('output' => array('valid' => true, 'id' => $id));
        }
        $this->response = ($arrjson);
    }

    public function evaluacion_get() {
        $resultado = 0;$q = '';
        $arr = array();
        if ($this->sdid > 0 && $this->fecha != "" && $this->pronum != "" && $this->form != "") {
            $q = "SELECT * FROM fir_evaluacion WHERE fir_sede_sde_id = " . $this->sdid . " AND eva_fecha = '" . $this->fecha . "' AND eva_pro_numinventario = '" . $this->pronum . "' AND eva_form_name = '" . $this->form . "'";
            $con = mysql_query($q, $this->conexion) or die(mysql_error() . "***ERROR: " . $q);
            $resultado = mysql_num_rows($con);
            while ($obj = mysql_fetch_object($con)) {
                $arr[] = array(
                    'id' => $obj->eva_id,
                    'usrid' => $obj->fir_usuario_usr_id,
                    'sdid' => $obj->fir_sede_sde_id,
                    'proid' => ($obj->fir_producto_pro_id),
                    'pronum' => ($obj->eva_pro_numinventario),
                    'form' => ($obj->eva_form_name),
                    'sist' => ($obj->eva_sistema),
                    'activ' => $obj->eva_actividad,
                    'cont' => utf8_encode($obj->eva_contenido),
                    'nota' => $obj->eva_notas,
                    'fecha' => $obj->eva_fecha,
                    'tsfecha' => $obj->eva_fecha_hora);
            }            
        } else {
            $arrjson = array('output' => array('valid' => false, 'response' => array('code' => '2001', 'content' => ' Faltan datos.')));
        }
        if ($resultado > 0) {
            $arrjson = array('output' => array('valid' => true, 'response' => $arr));
        } else {
            $arrjson = array('output' => array('valid' => FALSE, 'response' => array('code' => '2001', 'content' => 'Sin resultados', 'q' => $q)));
        }
        $this->response = ($arrjson);
    }
    
    public function getResponse() {
        return $this->response;
    }

    public function getResponseJSON() {
        return json_encode($this->response);
    }

    public function setId($_id) {
        $this->id = $_id;
    }

    public function setEuid($_id) {
        $this->euid = $_id;
    }

    public function setSdid($_id) {
        $this->sdid = $_id;
    }

}

//new Controller();
?>