<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CharacteristicCategory;

class Characteristic extends Model
{
    use HasFactory;

    protected $casts = [
        'meta_data' => 'array',
    ];

    protected $fillable = [
        'name',
        'meta_data',
        'characteristic_category_id',
    ];

    public function category()
    {
        return $this->belongsTo(CharacteristicCategory::class, 'characteristic_category_id');
    }

}
