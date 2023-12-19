<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CartController extends Controller
{

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
                "id" => $course->course_id,
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

    public function deleteFromCart(int $id)
    {
        $cart = session('cart', []);

        foreach ($cart as $index => $course) {
            if ($course['id'] == $id) {
                unset($cart[$index]);
                break;
            }
        }

        session(['cart' => array_values($cart)]);

        return redirect()
            ->back()
            ->with('status.message', 'El curso se eliminó del carrito correctamente.');
    }

    public function emptyCart()
    {
        session()->forget('cart');

        return redirect()
            ->back()
            ->with('status.message', 'El carrito se ha vaciado correctamente.');
    }
}
