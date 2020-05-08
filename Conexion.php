<?php
	class Conexion extends mysqli //Conexion::mysqli
	{
		public function __construct()
		{
			parent::__construct('localhost','root','','ejemplo');
			$this->query("SET NAMES 'utf8'; ");
			$this->connect_errno ? die('Error en la Conexion') : $error="Conecatado con exito";
			//echo $error;
			unset($error);
		}
	}
?>