<?php
namespace App\Controllers;

class SiteController extends BaseController
{
    public function index()
    {
        helper('date');
        helper('math');
        helper('debug');

        $adicao = adicionar(4, 9);

        
        $dados = ['titulo' => 'HOME', 'data' => date('d-m-Y', now())];
    
        return view('site/home', $dados);
    }

    public function contatos()
    {
        return "Pagina de contato";
    }

    public function _remap($metodo){
        if(method_exists($this, $metodo)){
            return $this->$metodo();
        }
    }

    private function exibir()
    {
        return "Exibindo metodo privado!";
    }
}