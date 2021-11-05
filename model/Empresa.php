<?php
class Empresa
{
	private $pdo;

	public $idempresa;
    public $codigo;
    public $nombre;
    public $denomina;
    public $teleycaja;
    public $registro;
    public $nit;
    public $giro;
    public $direccion;

    //////////////////////////////////////

    private $confirm;

	public $IDEMPRESA;
    public $CODIGO;
    public $NOMBRE;
    public $DENOMINA;
    public $TELEYCAJA;
    public $REGISTRO;
    public $NIT;
    public $GIRO;
    public $DIRECCION;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = ConexionComunDc::Conectar();     
		}		
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}	

	
	public function guardarEmpresa($data)
	{
		try 
		{
		$sql = "INSERT INTO Empresa (CODIGO, NOMBRE, DENOMINA, TELEYCAJA, REGISTRO, NIT, GIRO, DIRECCION) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(                
					$data->codigo,
					$data->nombre,
					$data->denomina,
					$data->teleycaja,
					$data->registro,
					$data->nit,
					$data->giro,
					$data->direccion
                )
			);
		}
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}

	public function empresaReg($data){

		try {
			$stm = $this->pdo
			          ->prepare("SELECT * FROM Empresa WHERE IDEMPRESA = ? ");			          

			$stm->execute(array($data->idempresa));
			
			#$confirm = $stm->fetch(PDO::FETCH_OBJ);

			#var_dump($confirm);
			#echo empty($confirm);

			/*if(empty($confirm)==1){//confirma que esta vacio (true)
				echo "vacio";
			}else {
				echo"lleno";
			}*/

			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (\Throwable $th) {
			//throw $th;
		}
	}

	public function obtenerEmpresa($id){
		try {
			$stm = $this->pdo->prepare("SELECT * FROM Empresa WHERE IDEMPRESA = ?");
			$stm->execute(array($id));

			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (\Throwable $th) {
			echo $th;
		}


	}

	public function listarEmpresa()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT IDEMPRESA, CODIGO, NOMBRE, DENOMINA, TELEYCAJA, REGISTRO, NIT, GIRO, DIRECCION FROM Empresa");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}

	public function modificarEmpresa($data){
		#var_dump($data);

		try {//no hace falta explicar, se hace un update con el IDIVA que esta en la base de datos.
			$stm = $this->pdo->prepare("UPDATE Empresa SET CODIGO=?, NOMBRE=?, DENOMINA=?, TELEYCAJA=?, REGISTRO=?, NIT=?, GIRO=?, DIRECCION=? WHERE IDEMPRESA=?;");
			$stm->execute(array($data->codigo,
							$data->nombre,
							$data->denomina,
							$data->teleycaja,
							$data->registro,
							$data->nit,
							$data->giro,
							$data->direccion,
							$data->idempresa));
			

			
		} catch (\Throwable $th) {
		 echo $th;
		}

	}

	public function eliminarEmpresa($data){
		
		try {
			$stm = $this->pdo->prepare("DELETE FROM Empresa WHERE IDEMPRESA = ?;");
			$stm->execute(array($data->idempresa));

		} catch (\Throwable $th) {
			echo $th;
		}
	}


}

?>