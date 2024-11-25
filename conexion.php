<?php
    class basedatos{
        private $con;
		private $dbequipo='localhost';
		private $dbusuario='root';
		private $dbclave='';
		private $dbnombre='veterinaria_b192';

        //constructor
		function __construct(){
			$this->conectar();	
		}//fin constructor

 
        //función para conectarse a la base de datos
		public function conectar(){
			$this->con = mysqli_connect($this->dbequipo, $this->dbusuario, $this->dbclave, $this->dbnombre);

			if(mysqli_connect_error()){
				die("Error: No se pudo conectar a la base de datos: " . mysqli_connect_error() . mysqli_connect_errno());
			}

		}//fin funcion conectar

		//metodo del login
		public function login ($usuario,$clave){
			$sql="SELECT COUNT(*) AS registros FROM usuarios WHERE usuario ='$usuario' AND clave='$clave';";
			$resultado= mysqli_query($this->con, $sql);
			return $resultado;
		}




		public function insertar_dueño($cedula, $nombre, $telefono, $email, $direccion) {
			$sql = "INSERT INTO Dueños (cedula, nombre, telefono, email, direccion) 
					VALUES ('$cedula', '$nombre', '$telefono', '$email', '$direccion')";
			$resultado = mysqli_query($this->con, $sql);
			if ($resultado) {
				return mysqli_insert_id($this->con); // Retorna el ID generado
			} else {
				return false;
			}
		}

		
		public function insertar_mascota($nombre_animal, $especie, $raza, $edad, $id_dueño) {
			$sql = "INSERT INTO Animales (nombre_animal, especie, raza, edad, id_dueño) 
					VALUES ('$nombre_animal', '$especie', '$raza', $edad, $id_dueño)";
			$resultado = mysqli_query($this->con, $sql);
			if ($resultado) {
				return mysqli_insert_id($this->con); // Retorna el ID generado
			} else {
				return false;
			}
		}

		
		public function insertar_cita($fecha, $hora, $motivo, $id_animal) {
			$sql = "INSERT INTO Citas (fecha, hora, motivo, id_animal) 
					VALUES ('$fecha', '$hora', '$motivo', $id_animal)";
			$resultado = mysqli_query($this->con, $sql);
			if ($resultado) {
				return true;
			} else {
				return false;
			}
		}
		
		




		


	
		
		//método para consultar datos
		public function leer_tabla(){
			$sql="SELECT 
            Dueños.id_dueño, Dueños.cedula, Dueños.nombre AS nombre, Dueños.telefono, Dueños.direccion,
            Animales.nombre_animal AS nombre_animal, Animales.especie, Animales.raza,
            Citas.fecha, Citas.hora
        FROM 
            Dueños
        JOIN 
            Animales ON Dueños.id_dueño = Animales.id_dueño
        JOIN 
            Citas ON Animales.id_animal = Citas.id_animal";
			$resultado= mysqli_query($this->con, $sql);
			return $resultado;
		}

		//metodo para eliminar un registro
		public function eliminar_reserva($id){
			$sql="DELETE FROM Dueños WHERE id_dueño=$id";
			$resultado= mysqli_query($this->con, $sql);

			if ($resultado==true) {
				return true;
			} else {
				return false;
			}
			
		}



		//seleccionar reservas
		public function seleccionar_reserva($id) {
			$sql="select * from reservas where res_id=$id";
			$resultado= mysqli_query($this->con, $sql);
			$retorno= mysqli_fetch_object($resultado);
			return $retorno;	
		}


		//actualizar reserva 

		public function actualizar_reserva($id, $nombre ,$celular, $correo, $observaciones, $fecha){
			$sql="update reservas set res_nombre='$nombre', res_celular='$celular', res_correo='$correo', res_observaciones='$observaciones',res_fecha='$fecha' where res_id=$id;";
			$resultado= mysqli_query($this->con, $sql);

			if ($resultado==true) {
				return  true;
				# code...
			}else {
				return false;	
			}
		}
	


	}//Fin clase BD


?>



    