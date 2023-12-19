<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
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

        //Guardamos los datos de la transacción
        $collection_id = $request->collection_id;
        $collection_status = $request->collection_status;
        $payment_id = $request->payment_id;
        $payment_type = $request->payment_type;
        $status = $request->status;
        $merchant_order_id = $request->merchant_order_id;
        $preference_id = $request->preference_id;

        $transaction = new Transaction();
        $transaction->collection_id = $collection_id;
        $transaction->collection_status = $collection_status;
        $transaction->payment_id = $payment_id;
        $transaction->payment_type = $payment_type;
        $transaction->status = $status;
        $transaction->merchant_order_id = $merchant_order_id;
        $transaction->preference_id = $preference_id;
        $transaction->save();

    }

    public function pending(Request $request)
    {
        echo "Pending.";
        dd($request);
    }

    public function failure(Request $request)
    {
        echo "Failure!";
        dd($request);
    }
}
