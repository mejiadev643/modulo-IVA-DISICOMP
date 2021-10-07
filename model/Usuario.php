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
//tuve que hacer estas variables porque cuando las queria imprimir como valor vacio en registro-usuario.php me daba errores. 
	public $IDLOGIN;
	public $NOMBRE;
	public $USERID;
	public $PASS;
	public $CARGO;
	public $SISTEMA;
	public $EMPRESA;

	private $confirm;

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

	public function usuarioReg($data){

		#echo "$data->userid";
		try {
			$stm = $this->pdo
			          ->prepare("SELECT * FROM Login WHERE USERID = ? ");			          

			$stm->execute(array($data->userid));
			
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


	public function obtenerUsuario($id){
		try {
			$stm = $this->pdo->prepare("SELECT * FROM Login WHERE IDLOGIN = ?");
			$stm->execute(array($id));

			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (\Throwable $th) {
			echo $th;
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

	public function modificarUsuario($data){
		#var_dump($data);

		try {//no hace falta explicar, se hace un update con el IDLOGIN que esta en la base de datos.
			$stm = $this->pdo->prepare("UPDATE Login SET NOMBRE=?, USERID=?, PASS=?, CARGO=?, SISTEMA=?, EMPRESA=? WHERE IDLOGIN=?;");
			$stm->execute(array($data->nombre,
							$data->userid,
							$data->pass,
							$data->cargo,
							$data->sistema,
							$data->empresa,
							$data->idlogin));
			

			
		} catch (\Throwable $th) {
		 echo $th;
		}

	}

	public function eliminarUsuario($data){
		
		#echo $data->idlogin;

		try {
			$stm = $this->pdo->prepare("DELETE FROM Login WHERE IDLOGIN = ?;");
			$stm->execute(array($data->idlogin));

		} catch (\Throwable $th) {
			echo $th;
		}
	}


}

?>