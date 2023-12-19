<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;

class MercadoPagoController extends Controller
{
    public function showCart()
    {
        $courses = session()->get('cart', []);

        if (empty($courses)) {
            return view('web/cart');
        } else {

            $items = [];
            $totalPrice = 0;

            foreach ($courses as $course) {

                $items[] = [
                    'title'         => $course["name"],
                    'quantity'      => 1,
                    'unit_price'    => $course["price"],
                    'currency_id'   => 'ARS',
                ];

                $totalPrice += $course["price"];
            }

            MercadoPagoConfig::setAccessToken(config('mercadopago.accessToken'));

            $client = new PreferenceClient();
            $preference = $client->create([
                'items' => $items,
                'back_urls' => [
                    'success' => route('web.checkout.success'),
                    'failure' => route('web.checkout.failure'),
                ],
            ]);

            return view('web/cart', [
                'courses' => $courses,
                'totalPrice' => $totalPrice,
                'preference' => $preference,
                'mpPublicKey' => config('mercadopago.publicKey'),
            ]);
        }
    }

    public function success(Request $request)
    {
        echo "Success!";
        dd($request);
    }

    public function failure(Request $request)
    {
        echo "Failure!";
        dd($request);
    }
}
