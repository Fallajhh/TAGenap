<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function pets()
    {
        return $this->hasMany(\App\Models\Pet::class);
    }
    use HasFactory;
    
    protected $fillable = ['name', 'address', 'phone'];

}
