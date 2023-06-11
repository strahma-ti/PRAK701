<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UserFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('isLoggedIn')){
            session()->setFlashdata('pesan', 'Login terlebih dahulu!');
            return redirect()->to(base_url('login'));
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
