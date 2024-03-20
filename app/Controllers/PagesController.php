<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PagesController extends BaseController
{
    public function home()
    {
        return view('templates/header')
        . view('pages/home')
        . view('templates/footer');
    }
    public function userGuide()
    {
        return view('templates/header')
        . view('pages/user-guide')
        . view('templates/footer');
    }
    public function faq()
    {
        return view('templates/header')
        . view('pages/faq')
        . view('templates/footer');
    }
}
