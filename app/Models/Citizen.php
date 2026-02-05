<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $fillable = ['nik', 'name', 'training_id'];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
