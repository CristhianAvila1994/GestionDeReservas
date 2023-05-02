<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huespede extends Model
{
    use HasFactory;
    protected $table = 'huespedes';
    public $timestamps = false;
}
