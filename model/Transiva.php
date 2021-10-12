<?php
class Transiva
{
	private $pdo;

	public $idiva;
    public $codtran;
    public $nombre;
    public $signo;
    public $sinoiva;

    //////////////////////////////////////

    private $confirm;

	public $IDIVA;
    public $CODTRAN;
    public $NOMBRE;
    public $SIGNO;
    public $SINOIVA;

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

	
	public function guardarTransiva($data)
	{
		try 
		{
		$sql = "INSERT INTO Transaciva (CODTRAN, NOMBRE, SIGNO, SINOIVA) 
		VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(                
					$data->codtran,
					$data->nombre,
					$data->signo,
					$data->sinoiva
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

	public function transivaReg($data){

		try {
			$stm = $this->pdo
			          ->prepare("SELECT * FROM Transaciva WHERE IDIVA = ? ");			          

			$stm->execute(array($data->idiva));
			
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

	public function obtenerTransiva($id){
		try {
			$stm = $this->pdo->prepare("SELECT * FROM Transaciva WHERE IDIVA = ?");
			$stm->execute(array($id));

			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (\Throwable $th) {
			echo $th;
		}


	}

	public function listarTransiva()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT IDIVA, CODTRAN, NOMBRE, SIGNO, SINOIVA FROM Transaciva");
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

	public function modificarTransiva($data){
		#var_dump($data);

		try {//no hace falta explicar, se hace un update con el IDIVA que esta en la base de datos.
			$stm = $this->pdo->prepare("UPDATE Transaciva SET CODTRAN=?, NOMBRE=?, SIGNO=?, SINOIVA=? WHERE IDIVA=?;");
			$stm->execute(array($data->codtran,
							$data->nombre,
							$data->signo,
							$data->sinoiva,
							$data->idiva));
			

			
		} catch (\Throwable $th) {
		 echo $th;
		}

	}

	public function eliminarTransiva($data){
		
		try {
			$stm = $this->pdo->prepare("DELETE FROM Transaciva WHERE IDIVA = ?;");
			$stm->execute(array($data->idiva));

		} catch (\Throwable $th) {
			echo $th;
		}
	}


}

?>