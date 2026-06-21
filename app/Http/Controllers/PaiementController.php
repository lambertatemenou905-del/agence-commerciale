<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FedaPay\FedaPay;
use FedaPay\Transaction;

class PaiementController extends Controller
{
    public function initier(Request $request)
    {
        try {
            FedaPay::setApiKey('sk_sandbox_A6hOihmBdNoEv0wyI-3p6wPx');
            FedaPay::setEnvironment('sandbox');

            $transaction = Transaction::create([
                'description' => $request->service ?? 'Service LAMB Agency',
                'amount'      => $request->montant,
                'currency'    => ['iso' => 'XOF'],
                'callback_url' => url('/paiement/succes'),
                'customer'    => [
                    'firstname' => $request->nom,
                    'email'     => $request->email,
                    'phone_number' => [
                        'number'  => $request->telephone,
                        'country' => 'BJ'
                    ]
                ]
            ]);

            $token = $transaction->generateToken();
            return redirect($token->url);

        } catch (\Exception $e) {
            return back()->with('error', 'Erreur paiement : ' . $e->getMessage());
        }
    }

    public function succes(Request $request)
    {
        return view('paiement_succes');
    }
}