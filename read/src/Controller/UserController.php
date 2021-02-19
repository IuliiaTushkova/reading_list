<?php


namespace App\Controller;


use Cake\Controller\Controller;

class UserController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
    }

    public function index(){
        $this->loadComponent('Paginator');
        $this->set('titre', 'Mon titre');

    }

}






