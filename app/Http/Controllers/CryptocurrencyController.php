<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptocurrencyController extends Controller
{
    public function wallet()
    {
        return view('cryptocurrency/wallet');
    }
}
