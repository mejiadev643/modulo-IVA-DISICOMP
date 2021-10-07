<?php
class ClienteProveedor
{
	private $pdo;
    
	public $IDCLIENTE;
    public $CODCLIENT;
    public $NOMBCLIENT;
    public $DENOMCLIENT;
    public $REGCLIENT;
    public $GIRONEG;
    public $NUMNIT;
	public $TELEFONO;
	public $DIRNEG;
	public $CIUDAD;
	public $DEPTO;
	public $RESNEGO;
	public $TFRESPON;
	public $TIPOCLIENT;
	public $CLASECLIENT;
	public $TIPODOCUCRFCOF;
	public $VENDEDOR;
	public $COBRADOR;
	public $ZONA;
	public $NOMBRENIT;
	public $CORREOELECT;
	public $NACIONALIDAD;
	public $FECHACREACION;
	public $GRANCONTRIB;
	public $RETENCIONIVA;
	public $IMPORTADOR;
	public $TIPOCOMPRA;
	public $LIMITECREDITO;
	public $DIASCREDITO;
	public $DIAVISITA;
	public $CLASIFICACIONCOMPRA;
	public $GRUPOCLIENTE;
	public $CTACARGADA;
	public $CTAABONADA;
	public $ESTADO;
	public $NUMSERIE;
	public $DOCUNICO;
	public $DESCUENTO;
	public $NUMERODUI;
	public $USUARIO;
	public $FECHAOPE;
	public $MAQUINA;
	public $HORA;
	public $GRADO;
	public $NOMGRADO;
	public $SECCION;
	public $CENCOS;
	public $MATRICULA;

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
	public function guardarcliente($data)
	{
		try 
		{
		$sql = "INSERT INTO Clientes (CODCLIENT, NOMBCLIENT, DENOMCLIENT, REGCLIENT,GIRONEG,NUMNIT,TELEFONO,DIRNEG,CIUDAD,DEPTO,TIPOCLIENT,TIPODOCUCRFCOF,NOMBRENIT,GRANCONTRIB,ESTADO,NUMSERIE,DOCUNICO,USUARIO,FECHAOPE,MAQUINA,HORA) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(                
					$data->CODCLIENT,
					$data->NOMBCLIENT,
					$data->DENOMCLIENT,
					$data->REGCLIENT,
					$data->GIRONEG,
					$data->NUMNIT,
					$data->TELEFONO,
					$data->DIRNEG,
					$data->CIUDAD,
					$data->DEPTO,
					$data->TIPOCLIENT,
					$data->TIPODOCUCRFCOF,
					$data->NOMBRENIT,
					$data->GRANCONTRIB,
					$data->ESTADO,
					$data->NUMSERIE,
					$data->DOCUNICO,
					$data->USUARIO,
					$data->FECHAOPE,
					$data->MAQUINA,
					$data->HORA
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
	public function listarClientesProveedores()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT IDCLIENTE,CODCLIENT, NOMBCLIENT, DENOMCLIENT, REGCLIENT,GIRONEG,NUMNIT,TELEFONO,DIRNEG,CIUDAD,DEPTO,TIPOCLIENT,TIPODOCUCRFCOF,NOMBRENIT,GRANCONTRIB,ESTADO,NUMSERIE,DOCUNICO,USUARIO,FECHAOPE,MAQUINA,HORA FROM Clientes");
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