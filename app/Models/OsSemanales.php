<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OsSemanales extends Model
{
    use HasFactory;

    protected $primaryKey = "id_sem";
    protected $table = "os_semanales";
}
