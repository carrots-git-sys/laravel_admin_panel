<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharacteristicController extends Controller
{
    public function index()
    {
        $categories = \App\Models\CharacteristicCategory::with('characteristics')->get();
        return view('characteristics.index', compact('categories'));
    }
}
