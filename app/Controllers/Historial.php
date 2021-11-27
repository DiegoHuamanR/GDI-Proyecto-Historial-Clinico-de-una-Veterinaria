<?php namespace App\Controllers;

use App\Models\ProcedimientosModel;

class Historial extends BaseController
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
		$arrTitulo['page'] = "historial";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		// $arrFooter['page_functions_js'] = "functions_home.js";
		$arrData['historial'] = $this->procedimientos->getHistorial();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/historial/historial',$arrData);
		echo view('web/footer');
	}

	public function addMedicos(){
        $arrTitulo['page'] = "medicos";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/medicos/addmedicos');
		echo view('web/footer');
	}

    public function editMedicos($cmvp){
        $arrData['medico'] = $this->procedimientos->getMedico($cmvp);
        $arrTitulo['page'] = "medicos";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/medicos/editmedicos',$arrData);
		echo view('web/footer');
	}

    public function save(){
        if($this->request->getPost()){
            $cmvp = $this->request->getPost('cmvp');
            $nombre = $this->request->getPost('nombre');
            $correo = $this->request->getPost('correo');
            $telefono = $this->request->getPost('telefono');
            if($this->procedimientos->saveMedico($cmvp,$nombre,$correo,$telefono)){
                return redirect()->to(base_url('/medicos'));
            }
        }
    }

    public function update(){
        if($this->request->getPost()){
            $cmvp = $this->request->getPost('cmvp');
            $nombre = $this->request->getPost('nombre');
            $correo = $this->request->getPost('correo');
            $telefono = $this->request->getPost('telefono');
            if($this->procedimientos->updMedico($cmvp,$nombre,$correo,$telefono)){
                return redirect()->to(base_url('/medicos'));
            }
        }
    }

    public function delete($cmvp){
        if($this->procedimientos->delMedico($cmvp)){
            return redirect()->to(base_url('/medicos'));
        }
    }
}