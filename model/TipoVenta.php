<?php
class TipoVenta
{
	private $pdo;
	public $IDCODIGO;
    public $CODIGO;
    public $NOMBRE;
    public $SIGLAS;
   

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

	
	
	public function listarTipoVenta()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT IDCODIGO, CODIGO, NOMBRE, SIGLAS FROM Tiposdeventa");
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