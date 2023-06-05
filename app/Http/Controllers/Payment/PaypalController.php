<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\PaypalFormRequest;
use App\Models\Paypal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaypalController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->id());
        $paypal = Paypal::where('user', $user->id)->get();
        return view('payment-paypal', compact('paypal'));
    }
    public function store(PaypalFormRequest $request)
    {
        $data = $request->validated();

        $paypal = new Paypal;
        $paypal->user = Auth::user()->id;
        $paypal->name = $data['name'];
        $paypal->email = $data['email'];
        $paypal->amount = $data['amount'];
        $paypal->save();

        return redirect('dashboard/payment/paypal')->with('message', 'Paypal Invoice Request Successfully Sent');
    }
}
