<?php

namespace App\Http\Controllers\Merchant;

use App\Models\Transaction;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Balance;
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

        $attr = $request->all();
        $attr['user_merchant'] = Auth::user()->id;
        $attr['status'] = 'unpaid';
        Transaction::create($attr);
        return back();
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