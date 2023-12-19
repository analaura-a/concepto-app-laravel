<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MercadoPagoController extends Controller
{
    public function showCart()
    {
        return view('web/cart');
    }
}
