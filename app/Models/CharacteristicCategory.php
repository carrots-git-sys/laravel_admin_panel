<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacteristicCategory extends Model
{
    use HasFactory;

    public function characteristics()
    {
        return $this->hasMany(Characteristic::class);
    }

}
