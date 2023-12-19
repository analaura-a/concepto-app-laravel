<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Purchase_detail;
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

        $transactionID = $transaction->id;

        //Guardamos los datos de la compra
        $total = 0;
        foreach (session('cart') as $course) {
            $total += $course['price'];
        }

        $user = auth()->user()->id;

        $purchase = new Purchase();
        $purchase->total_amount = $total;
        $purchase->status = $status;
        $purchase->user_id = $user;
        $purchase->transactions_id = $transactionID;
        $purchase->save();

        //Guardamos los datos del detalle de la compra
        $purchaseID = $purchase->id;

        foreach (session('cart') as $course) {
            $purchase_details = new Purchase_detail();
            $purchase_details->subtotal = $course['price'];
            $purchase_details->purchase_id = $purchaseID;
            $purchase_details->course_id = $course['id'];
            $purchase_details->user_id = $user;
            $purchase_details->save();
        }

        //Redirigimos
        return view('web/checkout_success');
    }

    public function pending(Request $request)
    {
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

        $transactionID = $transaction->id;

        //Guardamos los datos de la compra
        $total = 0;
        foreach (session('cart') as $course) {
            $total += $course['price'];
        }

        $user = auth()->user()->id;

        $purchase = new Purchase();
        $purchase->total_amount = $total;
        $purchase->status = $status;
        $purchase->user_id = $user;
        $purchase->transactions_id = $transactionID;
        $purchase->save();

        //Redirigimos
        return view('web/checkout_pending');
    }

    public function failure(Request $request)
    {
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

        return view('web/checkout_failure');
    }
}
