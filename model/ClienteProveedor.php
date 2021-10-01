<?php
class ClienteProveedor
{
	private $pdo;
    
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


}

?>