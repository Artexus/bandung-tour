<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function showTransaction()
    {
        $transactions = Transaction::where('user_id', Auth::user()->id)->where('deleted_at', null)->orderBy('created_at', 'desc')->get();
        $details = array();
        foreach ($transactions as $transaction) {
            $details[$transaction->invoice_id] = json_decode($transaction->payload);
        }
        return view('transaction.index')->with('transactions', $transactions)->with('details', $details);
    }
}
