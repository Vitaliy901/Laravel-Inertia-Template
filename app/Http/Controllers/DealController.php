<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DealController extends Controller
{
    public function show()
    {
        return Inertia::render('Deal', [
            'title' => 'Deal'
        ]);
    }
}
