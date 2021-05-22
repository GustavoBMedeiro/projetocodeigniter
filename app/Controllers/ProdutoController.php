<?php

namespace App\Controllers;

class ProdutoController extends BaseController
{
    public function index()
    {
        return "Pagina de Listagem de Produtos";
    }

    public function novo()
    {
        return "Página de Cadastro de Produtos";
    }

}
