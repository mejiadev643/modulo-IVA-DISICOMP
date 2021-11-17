<?php
class Ventas
{
	private $pdo;
    
    public $empresa;
    public $sucursal;
    public $nocaja;
    public $compro; 
    public $compro2;
    public $nodocu;
	public $fecha;
	public $registro;
	public $valor;
	public $exentas;
	public $iva13;
	public $iva2;
	public $iva1;
	public $excluidas;
	public $tt;
	public $descri;
	public $fovial;
	public $fecopera;
	public $cotran;
	public $f930total;
	public $retencion;
	public $valsiva;
	public $cuentac;
	public $cuentaa;
	public $netocof;
	public $ivacof;
	public $migradode;
	public $grande;
	public $valretper;
	public $equipo;
	public $total;
	public $usuario;
	public $maquina;
	public $fechaope;
	public $hora;
	public $exportacion;
	public $serie;
	public $codidocu;
	public $periodo;
	public $nounico;
	public $observa;
	public $nit;
	public $cuentaf;
	public $tipodocu;
	public $llavec;
	

	 public $SUCURSAL;
	 public $TT;
	 public $REGISTRO;
	 public $COMPRO;
	 public $NOUNICO;
	 public $SERIE;
	 public $FECHA;
	 public $FECHAOPE;
	 public $VALOR;
	 public $IVA13;
	 public $IVA1;
	 public $IVA2;
	 public $EXENTAS;
	 public $FOVIAL;
	 public $COTRAN;
	 public $TOTAL;
	 public $IDVENTA;


	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = ConexionMovimientosDc::Conectar();     
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
	public function guardarventa($sale)
	{
		try 
		{
		$sql = "INSERT INTO Venta (TT,SUCURSAL, COMPRO, NOUNICO, FECHA, REGISTRO, SERIE,VALOR,IVA13,IVA1,IVA2,EXENTAS,FOVIAL,COTRAN,TOTAL,FECOPERA,USUARIO,FECHAOPE,MAQUINA,HORA) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(  
					$sale->TT,
					$sale->SUCURSAL,
					$sale->COMPRO,
					$sale->NOUNICO,
					$sale->FECHA,
					$sale->REGISTRO,
					$sale->SERIE,
					$sale->VALOR,
					$sale->IVA13,
					$sale->IVA1,
					$sale->IVA2,
					$sale->EXENTAS,
					$sale->FOVIAL,
					$sale->COTRAN,
					$sale->TOTAL,
					$sale->FECOPERA,
					$sale->USUARIO,
					$sale->FECHAOPE,
					$sale->MAQUINA,
					$sale->HORA
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

	public function listarVentas()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT IDVENTA, TT,SUCURSAL, COMPRO, NOUNICO, FECHA, REGISTRO, SERIE,VALOR,IVA13,IVA1,IVA2,EXENTAS,FOVIAL,COTRAN,TOTAL,FECOPERA,USUARIO,FECHAOPE,MAQUINA,HORA FROM Venta");
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

public function ObtenerVentas($id){
		try {
			$stm = $this->pdo->prepare("SELECT * FROM Venta WHERE IDVENTA = ?");
			$stm->execute(array($id));

			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (\Throwable $th) {
			echo $th;
		}

	}




	public function eliminarVenta($sale){
		
		

		try {
			$stm = $this->pdo->prepare("DELETE FROM Venta WHERE IDVENTA = ?;");
			$stm->execute(array($sale->IDVENTA));

		} catch (\Throwable $th) {
			echo $th;
		}
	}     

public function modificarventas($sale)
	{
		try 
		{
			$sql = "UPDATE Venta SET 
						 
						TT            = ?,
						SUCURSAL      = ?,
						COMPRO        = ?,
						NOUNICO       = ?,
						FECHA         = ?,
						REGISTRO      = ?,
						SERIE         = ?,
						VALOR         = ?,
						IVA13         = ?,
						IVA1          = ?,
						IVA2          = ?,
						EXENTAS       = ?,
						FOVIAL        = ?,
						COTRAN        = ?,
						TOTAL         = ?,
						FECOPERA      = ?,
						USUARIO       = ?,
						FECHAOPE      = ?,
						MAQUINA       = ?,
						HORA          = ?
				    WHERE IDVENTA = ?" ;

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                    $sale->TT,
					$sale->SUCURSAL,
					$sale->COMPRO,
					$sale->NOUNICO,
					$sale->FECHA,
					$sale->REGISTRO,
					$sale->SERIE,
					$sale->VALOR,
					$sale->IVA13,
					$sale->IVA1,
					$sale->IVA2,
					$sale->EXENTAS,
					$sale->FOVIAL,
					$sale->COTRAN,
					$sale->TOTAL,
					$sale->FECOPERA,
					$sale->USUARIO,
					$sale->FECHAOPE,
					$sale->MAQUINA,
					$sale->HORA,
					$sale->IDVENTA
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

public function obtenerNombre($id){
		try {
			$stm = $this->pdo->prepare("SELECT NOMBRE FROM Transaciva WHERE CODTRAN = ?");
			$stm->execute(array($id));

			return $stm->fetch(PDO::FETCH_OBJ);

		} catch (\Throwable $th) {
			echo $th;
		}


	}
	public function ReporteVentaExcel()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT IDVENTA, TT,SUCURSAL, COMPRO, NOUNICO, FECHA, REGISTRO, SERIE,VALOR,IVA13,IVA1,IVA2,EXENTAS,FOVIAL,COTRAN,TOTAL,FECOPERA,USUARIO,FECHAOPE,MAQUINA,HORA FROM Venta");
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