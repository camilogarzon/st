<?php
/**
 * Clase que contiene varios métodos útiles
 * @author Camilo Garzon Calle
 * @version 1.0
 */

class Util{
	public function __construct() {
	    //contructor que no tiene ninguna funcion, por ahora
	}

	/**
	 * Metodo para construir un SELECT.
	 * @param string $tables nombres de la tabla a consultar. si son varias se separa por comma
	 * @param string $where condiciones de la consulta. lo que se escribe despues de WHERE, no es obligatorio
	 * @param string $fields campos especificos de la tabla, no es obligatorio
	 * @return string consulta construida
		<code>
			include 'classes/Util.php';
			$tables = "mi_tabla, tabla_dos";
			$where = "(id = 0) and (tipo='cadena')";
			$fields = "usr_nombre, usr_apellido";
			echo Util::make_query_select($tables,$where,$fields);
		</code>
	 *  tipo STRING
	 */
	public static function make_query_select($tables, $where = "", $fields = ""){
		$query = "SELECT * FROM "; if ($tables == null || strlen($tables) < 1) { return "***Falta nombre de la tabla***";} $f = (strlen($fields) > 2) ? $fields : "*"; $query = "SELECT ".$f." FROM ".$tables." "; if (strlen($where) > 2) { $query .= " WHERE ".$where." ";} return $query;
	}
	
	/**
	 * Metodo para construir un INSERT.
	 * @param string $table nombre de la tabla a escribir
	 * @param array $arrfieldscomma campos y valores tipo STRING, que requieren comma
	 * @param array $arrfieldsnocomma campos y valores que no requieren comma
	 * @return string consulta construida
		<code>
			include 'classes/Util.php';
			$table = "mi_tabla";
			$arrfieldscomma = array('campo1' => 'valor1', 'campo2' => 'valor2', 'campo3' => 'valor3');
			$arrfieldsnocomma = array('campoA' => 'NOW()', 'campoB' => '2', 'campoC' => 'GET');
			echo Util::make_query_insert($table, $arrfieldscomma, $arrfieldsnocomma);
		</code>
	 * 
	 */
	public static function make_query_insert($table, $arrfieldscomma, $arrfieldsnocomma){
		$query = "INSERT INTO ";
		if ($table == null || strlen($table) < 1) { return "***Falta nombre de la tabla***";}
		$query .= $table;
		$fields = " ("; $values = " VALUES (";
		foreach ($arrfieldscomma as $f => $v) {
			$fields .= " ".$f.","; $values .= " '".$v."',";
		}
		foreach ($arrfieldsnocomma as $f2 => $v2) {
			$fields .= " ".$f2.","; $values .= " ".$v2.",";
		}
		$fields = rtrim($fields, ","); $values = rtrim($values, ",");
		$fields .= ") "; $values .= ") ";
		$query .= $fields.$values;
		return $query;
	}
	
	/**
	 * Metodo para construir un UPDATE.
	 * @param string $table nombre de la tabla a escribir
	 * @param string $where condicion para actualizar
	 * @param array $arrfieldscomma campos y valores tipo STRING, que requieren comma
	 * @param array $arrfieldsnocomma campos y valores que no requieren comma
	 * @return string consulta construida
		<code>
			include 'classes/Util.php';
			$table = "mi_tabla";
			$where = "(id = 0) and (tipo='cadena')";
			$arrfieldscomma = array('campo1' => 'valor1', 'campo2' => 'valor2', 'campo3' => 'valor3');
			$arrfieldsnocomma = array('campoA' => 'NOW()', 'campoB' => '2', 'campoC' => 'GET');
			echo Util::make_query_insert($table, $arrfieldscomma, $arrfieldsnocomma);
		</code>
	 * 
	 */
	public static function make_query_update($table, $where, $arrfieldscomma, $arrfieldsnocomma){
		$query = "UPDATE ";
		if ($table == null || strlen($table) < 1) { return "***Falta nombre de la tabla***";}
		if ($where == null || strlen($where) < 1) { return "***Falta WHERE id=?? del registro***";}
		$query .= $table." SET ";
		$fields = ""; 
		foreach ($arrfieldscomma as $f => $v) {
                    if (strlen($v) > 3){
                        $fields .= " ".$f." = '".$v."',";
                    }
		}
		foreach ($arrfieldsnocomma as $f2 => $v2) {
                    if ($v2 > 0){
                        $fields .= " ".$f2." = ".$v2.",";
                    }
		}
		$fields = rtrim($fields, ",");
		$query .= $fields." WHERE ".$where;
		return $query;
	}
	
	 	 
	/**
	 * Metodo para construir un DELTE.
	 * @param string $table nombres de la tabla a consultar
	 * @param string $where condiciones de la consulta. lo que se escribe despues de WHERE, es obligatorio. "all" para borrar todos los registros
	 * @return string consulta construida
		<code>
			include 'classes/Util.php';
			$tables = "mi_tabla, tabla_dos";
			$where = "(id = 0) and (tipo='cadena')";
			echo Util::make_query_select($tables,$where,$fields);
		</code>
	 *  tipo STRING
	 */
	public static function make_query_delete($table, $where){
	    $query = "DELETE FROM ";
		if ($table == null || strlen($table) < 1) { return "***Falta nombre de la tabla***";}
		$query .= $table;
		if (strlen($where) > 2) {
			if ($where != "all") {
				$query .= " WHERE $where ";
			} else {
				return "***Falta WHERE no valido***";
			}
		}
		return $query;
	}
	
}

?>