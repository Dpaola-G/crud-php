<?php 
include ('conexion.php'); 

class ClaseDAO {
    public $id;
    public $nombreClase;
    public $codigo;

    function __construct($id, $nom, $cod) {
        $this->id = $id;
        $this->nombreClase = $nom;
        $this->codigo = $cod;
    }

    function TraerClases() {
        $conexion = new Conexion('localhost', 'root', '', 'diana');
        try {
            $conn = $conexion->Conectar();
            $stmt = $conn->query('SELECT * FROM productos');
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // print_r(json_encode($rows));
        
            return($rows);
            echo ('');
        } catch (PDOException $e) {
            echo "error de conexion: " . $e->getMessage();
        }
    }

    function EliminarClase() {
        $conexion = new Conexion('localhost', 'root', '', '
        ');
        try {
            $conn = $conexion->Conectar();
            $squery="DELETE FROM clase"
            // $stmt = $conn->query('SELECT * FROM productos');
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            return("exito se elimino");
            echo ('');
        } catch (PDOException $e) {
            echo "error de conexion: " . $e->getMessage();
        }
    }


}



?>


<!-- /*try{
	$conexion = new PDO($dns,$usuario,$contraseña);

	$consulta = $conexion -> query("SELECT * FROM productos");
	$consulta -> execute();

	$resultado = $consulta -> fetchAll();

	print("Obtener todas las folas restantes del producto \n");
	print_r(json_encode($resultado));
}catch(PDOException $e){
	echo 'Fallo de conexion'. $e -> getMessage();
}
?>*/ -->