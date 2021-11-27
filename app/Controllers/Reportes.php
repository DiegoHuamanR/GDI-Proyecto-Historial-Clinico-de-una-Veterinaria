<?php namespace App\Controllers;

use App\Models\ProcedimientosModel;

class Reportes extends BaseController
{
	protected $procedimientos;

	public function __construct(){
        $session = session();
        if(empty(session('login')))
        {
            header('Location: '.base_url().'/login');
            die();
        }
        
        $this->procedimientos = new ProcedimientosModel();
        
    }
	public function publicidad()
	{
		$arrTitulo['page'] = "escritos";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		// $arrFooter['page_functions_js'] = "functions_home.js";
		$arrData['publicidad'] = $this->procedimientos->repPublicidad();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/reportes/publicidad',$arrData);
		echo view('web/footer');
	}
    public function encargados()
	{
		$arrTitulo['page'] = "cartas";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		// $arrFooter['page_functions_js'] = "functions_home.js";
		$arrData['encargados'] = $this->procedimientos->repEncargados();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/reportes/encargados',$arrData);
		echo view('web/footer');
	}
    public function hvacunacion()
	{
		$arrTitulo['page'] = "notificaciones";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		// $arrFooter['page_functions_js'] = "functions_home.js";
		$arrData['hvacunacion'] = $this->procedimientos->repHVacunacion();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/reportes/hvacunacion',$arrData);
		echo view('web/footer');
	}
    public function crazas()
	{
		$arrTitulo['page'] = "peticion";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		// $arrFooter['page_functions_js'] = "functions_home.js";
		$arrData['crazas'] = $this->procedimientos->repCRazas();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/reportes/crazas',$arrData);
		echo view('web/footer');
	}
    public function examenes()
	{
        if($this->request->getPost()){
            $minimo = $this->request->getPost('minimo');
            $maximo = $this->request->getPost('maximo');
            $arrTitulo['page'] = "examenes";
            $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
            // $arrFooter['page_functions_js'] = "functions_home.js";
            $arrData['examenes'] = $this->procedimientos->repExamenes($minimo,$maximo);
            echo view('web/header');
            echo view('web/aside',$arrTitulo);
            echo view('web/reportes/examenes',$arrData);
            echo view('web/footer');
        }else{
            $minimo = 1;
            $maximo = 100;
            $arrTitulo['page'] = "examenes";
            $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
            // $arrFooter['page_functions_js'] = "functions_home.js";
            $arrData['examenes'] = $this->procedimientos->repExamenes($minimo,$maximo);
            echo view('web/header');
            echo view('web/aside',$arrTitulo);
            echo view('web/reportes/examenes',$arrData);
            echo view('web/footer');
        }
	}
    public function fallecidos()
	{
		$arrTitulo['page'] = "fallecidos";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		// $arrFooter['page_functions_js'] = "functions_home.js";
		$arrData['fallecidos'] = $this->procedimientos->repFallecidos();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/reportes/fallecidos',$arrData);
		echo view('web/footer');
	}
    public function realizados()
	{
        if($this->request->getPost()){
            $mes = $this->request->getPost('mes');
            $arrTitulo['page'] = "realizadas";
            $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
            // $arrFooter['page_functions_js'] = "functions_home.js";
            $arrData['realizados'] = $this->procedimientos->repRealizados($mes);
            echo view('web/header');
            echo view('web/aside',$arrTitulo);
            echo view('web/reportes/realizados',$arrData);
            echo view('web/footer');
        }else{
            $arrTitulo['page'] = "realizadas";
            $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
            $mes = date('m');
            $arrData['realizados'] = $this->procedimientos->repRealizados($mes);
            echo view('web/header');
            echo view('web/aside',$arrTitulo);
            echo view('web/reportes/realizados',$arrData);
            echo view('web/footer');
        }
	}
    public function duenos()
	{
        if($this->request->getPost()){
            $dueno = $this->request->getPost('dueno');
            $arrTitulo['page'] = "duenos";
            // $arrFooter['page_functions_js'] = "functions_home.js";
            $arrData['duenos'] = $this->procedimientos->repDuenos($dueno);
            $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
            echo view('web/header');
            echo view('web/aside',$arrTitulo);
            echo view('web/reportes/duenos',$arrData);
            echo view('web/footer');
        }else{
            $arrTitulo['page'] = "realizadas";
            $dueno = date('m');
            $arrData['duenos'] = $this->procedimientos->repDuenos($dueno);
            $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
            echo view('web/header');
            echo view('web/aside',$arrTitulo);
            echo view('web/reportes/duenos',$arrData);
            echo view('web/footer');
        }
	}
    public function tratamiento()
	{
		$arrTitulo['page'] = "tratamiento";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		// $arrFooter['page_functions_js'] = "functions_home.js";
		$arrData['tratamiento'] = $this->procedimientos->repTratamiento();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/reportes/tratamiento',$arrData);
		echo view('web/footer');
	}
    public function vacunas()
	{
		$arrTitulo['page'] = "vacunas";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		// $arrFooter['page_functions_js'] = "functions_home.js";
		$arrData['vacunas'] = $this->procedimientos->repVacunas();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/reportes/vacunas',$arrData);
		echo view('web/footer');
	}
}