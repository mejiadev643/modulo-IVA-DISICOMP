<?php
class Usuario
{
	private $pdo;
	public $idlogin;
    public $nombre;
    public $userid;
    public $pass;
    public $cargo;
    public $sistema;
    public $empresa;

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

	public function entrar($userid, $pass)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM Login WHERE USERID = ? AND PASS = MD5(?)");			          

			$stm->execute(array($userid, $pass));
			
			return $stm->fetch(PDO::FETCH_OBJ);
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
	public function guardarUsuario($data)
	{
		try 
		{
		$sql = "INSERT INTO Login (NOMBRE, USERID, PASS, CARGO,SISTEMA,EMPRESA) 
		VALUES (?, ?, MD5(?),?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(                
					$data->nombre,
					$data->userid,
					$data->pass,
					$data->cargo,
					$data->sistema,
					$data->empresa
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
	public function listarUsuarios()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT IDLOGIN, NOMBRE, USERID, CARGO, SISTEMA, EMPRESA FROM Login");
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