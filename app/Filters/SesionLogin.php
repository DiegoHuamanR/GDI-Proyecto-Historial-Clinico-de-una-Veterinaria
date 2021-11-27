<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class SesionLogin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session('login') == true) {
            return redirect()->to(base_url('/modulos'));
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}