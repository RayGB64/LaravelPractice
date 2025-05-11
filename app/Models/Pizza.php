<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    public function index(): hasMany
    {
        return $this->hasMany(Pizza::class);
    }
}
