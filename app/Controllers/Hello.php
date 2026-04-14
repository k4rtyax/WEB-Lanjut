<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Hello extends BaseController
{
    public function index(): string
    {
        return view('hello_view');
    }
}
