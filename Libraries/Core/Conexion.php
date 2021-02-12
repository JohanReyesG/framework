<?php 
	/**
	 * Conexion
	 */
	class Conexion
	{
		private $conect;

		function __construct()
		{
			$connectionString ="mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
			try {
				// Conexion Exitosa!!
			$this->conect = new PDO($connectionString, DB_USER, DB_PASS);
			$this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				$this->conect = 'Error al conectar';
				echo "Error: ".$e->getmessage();
			}
		}
		public function conect()
		{
			return $this->conect;
		}
	}
	



 ?>