<?php
class Usuario
{
	private $pdo;
    
    public $nombre;
    public $userid;
    public $password;
    public $cargo;
    public $sistema;
    public $empresa;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::Conectar();     
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

	public function entrar($userid, $password)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM Login WHERE USERID = ? AND PASSWORD = ?");			          

			$stm->execute(array($userid, $password));
			
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


}

?>