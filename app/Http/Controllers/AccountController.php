<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AccountController extends Controller
{
    public function show()
    {
        return Inertia::render('Account', [
            'title' => 'Account'
        ]);
    }
}
