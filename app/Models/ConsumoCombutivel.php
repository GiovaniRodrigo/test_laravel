<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\database\Eloquent\Model;

class ConsumoCombustivel extends
{
    public string $numeroSerie;
    public float $capacidade;
    public string $portador;

}
