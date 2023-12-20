<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Purchase_detail;

class CartController extends Controller
{

    public function addToCart(int $id)
    {
        $course = Course::findOrFail($id);
        $user = auth()->user()->id;

        $userAlreadyPurchased = Purchase_detail::where('user_id', $user)
            ->where('course_id', $id)
            ->exists();

        //Verificamos si el curso ya fue comprado por el usuario
        if ($userAlreadyPurchased) {
            return redirect()
                ->back()
                ->with('status.message', 'Ya has adquirido este curso.');
        } else {
            //Verificamos si el curso ya se encuentra en el carrito
            $cart = session()->get('cart', []);

            if (isset($cart[$id])) {
                return redirect()
                    ->back()
                    ->with('status.message', 'Este curso ya se encuentra en el carrito.');
            } else {
                $cart[$id] = [
                    "id" => $course->course_id,
                    "name" => $course->name,
                    "teacher" => $course->teacher->name,
                    "price" => $course->price,
                    "cover" => $course->cover,
                ];
            }

            session()->put('cart', $cart);

            return redirect()
                ->back()
                ->with('status.message', '¡El curso se ha añadido al carrito!');
        }
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
