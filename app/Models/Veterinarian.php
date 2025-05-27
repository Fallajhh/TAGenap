<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarian extends Model
{
    protected $fillable = ['name', 'specialization', 'phone'];

    use HasFactory;
}
