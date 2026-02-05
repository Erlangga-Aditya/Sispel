<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = ['name', 'description'];

    public function citizens()
    {
        return $this->hasMany(Citizen::class);
    }
}
