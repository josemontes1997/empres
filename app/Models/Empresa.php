<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = ['usuario', 'tipo', 'marca', 'modelo', 'ticket','serie',
    'n_producto',
    'so',
    'procesador',
    'hdd',
    'ssd',
    'ram',
    'mantenimiento',
];
}
