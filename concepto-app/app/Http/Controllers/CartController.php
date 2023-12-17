<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CartController extends Controller
{
    public function showCart()
    {
        return view('web/cart');
    }

    public function addToCart(int $id)
    {
        $course = Course::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            return redirect()
                ->back()
                ->with('status.message', 'Este curso ya se encuentra en el carrito.');
        } else {
            $cart[$id] = [
                "name" => $course->name,
                // "teacher" => $course->price,
                "price" => $course->price,
                "cover" => $course->cover,
            ];
        }

        session()->put('cart', $cart);

        return redirect()
            ->back()
            ->with('status.message', '¡El curso se ha añadido al carrito!');
    }

    public function deleteCart()
    {
        session()->forget('cart');

        return redirect()
            ->back()
            ->with('status.message', 'El carrito se ha vaciado correctamente.');
    }
}
