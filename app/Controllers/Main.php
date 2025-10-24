<?php

namespace App\Controllers;
//složka

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

//nahrání tříd které budeme využívat věci z tady těchto tříd

class Main extends BaseController
{
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    //construktor(vytváří instance - konkrétní objekty) jak máme vytvářet instance a to je konkrétní objekt
    {
        parent::initController($request, $response, $logger);
        //používá construktor toho rodiče
    }

   

    public function index()
    {
        echo view("main_page");
        //vyvolává view s názvem main_page
    }

    public function page2(){
        echo view("main_page2");
        
    }
    public function page3(){
        echo view("main_page3");
        
    }
    public function page4(){
        echo view("main_page4");
        
    }
}
