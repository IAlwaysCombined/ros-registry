<?php

namespace App\Services\Plot\Interfaces;

interface PlotInterface
{
    public function index();

    public function view(array $cadastralNumbers);
}
