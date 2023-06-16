<?php

namespace App\Services\Cadastral\Interfaces;

interface CadastralInterface
{
    public function index();

    public function view(int $id);
}
