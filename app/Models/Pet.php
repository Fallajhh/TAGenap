<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function owner()
    {
        return $this->belongsTo(\App\Models\Owner::class);
    }
    protected $fillable = [
    'owner_id',
    'name',
    'species',
    'breed',
    'gender',
    'birth_date',
    ];
    use HasFactory;
}
