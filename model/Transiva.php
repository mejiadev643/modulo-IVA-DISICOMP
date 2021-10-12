<?php
class Transiva
{
	private $pdo;
	public $idiva;
    public $codtran;
    public $nombre;
    public $signo;
    public $sinoiva;

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


}

?>