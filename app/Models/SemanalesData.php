<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SemanalesData extends Model
{
    use HasFactory;
    protected $table = 'semanales_data';
    protected $primaryKey = 'id_data';
}
