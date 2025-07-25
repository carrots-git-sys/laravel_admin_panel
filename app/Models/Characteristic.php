<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(CharacteristicCategory::class, 'characteristic_category_id');
    }

}
