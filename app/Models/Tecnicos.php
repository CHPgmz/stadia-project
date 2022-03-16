<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnicos extends Model
{
    use HasFactory;
    protected $table = "tecnicos";
    protected $primaryKey = "nombre_tec";
    public $incrementing = false;
    protected $keyType = "string";
}
