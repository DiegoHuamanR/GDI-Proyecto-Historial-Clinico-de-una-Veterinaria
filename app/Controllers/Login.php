<?php namespace App\Controllers;

use App\Models\ProcedimientosModel;

class Login extends BaseController
{
	protected $procedimientos;

	public function __construct(){
        $session = session();
        if(session('login'))
        {
            header('Location: '.base_url().'/home');
            die();
        }
        $this->procedimientos = new ProcedimientosModel();
    }

	public function index()
	{
		$mensaje = session('mensaje');
		return view('web/login', ['mensaje' => $mensaje]);
	}

	public function login(){
		$usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');

		$datosUsuario = $this->procedimientos->obtenerUsuario($usuario,$password);

		if(!empty($datosUsuario)){
			$data = [
				'usuario' => $datosUsuario['nom_veterinario'],
				'login' => true
			];
			$session = session();
			$session->set($data);

			return redirect()->to(base_url('/home'))->with('mensaje','1');
		} else{
			return redirect()->to(base_url('/'))->with('mensaje','Error al ingresar credenciales');
		}
	}

	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
	//--------------------------------------------------------------------

}