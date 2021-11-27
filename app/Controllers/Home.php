<?php namespace App\Controllers;

use App\Models\ProcedimientosModel;

class Home extends BaseController
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
	public function index()
	{
		$arrTitulo['page'] = "Inicio";
		$arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		// $arrFooter['page_functions_js'] = "functions_home.js";
		// $data['dataProductos'] = $this->viewProductosSlider();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/dashboard');
		echo view('web/footer');
	}

	public function medicos(){
		$arrTitulo['page'] = "medicos";
		$arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		// $arrFooter['page_functions_js'] = "functions_home.js";
		$arrData['medicos'] = $this->procedimientos->getMedicos();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/medicos',$arrData);
		echo view('web/footer');
	}
}