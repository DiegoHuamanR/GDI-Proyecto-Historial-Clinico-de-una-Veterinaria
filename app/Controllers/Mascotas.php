<?php namespace App\Controllers;

use App\Models\ProcedimientosModel;

class Mascotas extends BaseController
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
		$arrTitulo['page'] = "mascotas";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		// $arrFooter['page_functions_js'] = "functions_home.js";
		$arrData['mascotas'] = $this->procedimientos->getMascotas();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/mascotas/mascotas',$arrData);
		echo view('web/footer');
	}

	public function addMascotas(){
        $arrTitulo['page'] = "mascotas";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/mascotas/addmascotas',$arrTitulo);
		echo view('web/footer');
	}

    public function editMascotas($cmvp){
        $arrData['medico'] = $this->procedimientos->getMedico($cmvp);
        $arrTitulo['page'] = "mascotas";
        $arrTitulo['duenos'] = $this->procedimientos->getDuenos();
		echo view('web/header');
		echo view('web/aside',$arrTitulo);
		echo view('web/mascotas/editmascotas',$arrData);
		echo view('web/footer');
	}

    public function save(){
        if($this->request->getPost()){
            $codigo = $this->request->getPost('codigo');
            $dueno = $this->request->getPost('dueno');
            $nombre = $this->request->getPost('nombre');
            $especie = $this->request->getPost('especie');
            $raza = $this->request->getPost('raza');
            $sexo = $this->request->getPost('sexo');
            $peso = $this->request->getPost('peso');
            $fecha = $this->request->getPost('fecha');
            if($this->procedimientos->saveMascota($codigo,$dueno,$nombre,$especie,$raza,$sexo,$peso,$fecha)){
                return redirect()->to(base_url('/mascotas'));
            }
        }
    }

    public function update(){
        if($this->request->getPost()){
            $cmvp = $this->request->getPost('cmvp');
            $nombre = $this->request->getPost('nombre');
            $correo = $this->request->getPost('correo');
            $telefono = $this->request->getPost('telefono');
            if($this->procedimientos->updMascota($cmvp,$nombre,$correo,$telefono)){
                return redirect()->to(base_url('/mascotas'));
            }
        }
    }

    public function delete($cod){
        if($this->procedimientos->delMascota($cod)){
            return redirect()->to(base_url('/mascotas'));
        }
    }
}