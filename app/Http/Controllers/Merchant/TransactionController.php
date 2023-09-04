<?php

namespace App\Http\Controllers\Merchant;

use App\Models\Transaction;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Balance;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchant.transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $buyer = User::find($request->user_id);

        if ($buyer->balance <= $request->total) {
            flash()->addWarning('Maaf, saldo tidak mencukupi');
            return back();
        }
    
        $transactionData = [
            'user_id' => $request->user_id,
            'name_item' => $request->name_item,
            'user_merchant' => Auth::user()->id,
            'status' => 'unpaid',
            'price_product' => $request->price_product,
            'total' => $request->total,
            'information' => $request->information ?? ''
        ];
    
        Transaction::create($transactionData);
        
        $buyer->update([
            'balance' => $buyer->balance -= $request->total
        ]);
    
        flash()->addSuccess('Terima kasih telah melakukan transaksi');
        return redirect()->route('merchant.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Transaction::find($id)->delete();
        return back();
    }
}
