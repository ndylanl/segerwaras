<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        return view('admin.admintransaction', [
            'title' => 'Admin Transaction',
            'transactions' => Transaction::where('name', 'like', '%'.$request->search.'%')
            ->orWhere('message', 'like', '%'.$request->search.'%')
            ->orWhere('address', 'like', '%'.$request->search.'%')
            ->orWhere('city', 'like', '%'.$request->search.'%')
            ->orWhere('zip', 'like', '%'.$request->search.'%')
            ->orWhere('phoneNumber', 'like', '%'.$request->search.'%')->paginate(5)
        ]);
    }

    public function indexUser()
    {
        return view('visitor.transactions', [
            'title' => 'Admin Transaction',
            'transactions' => Transaction::where('user_id', '=', Auth::id())->whereIn('status', ['processing', 'done'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(Auth::id());

        $this->validate($request, [
            'name' => "required|string|max:255",
            'message' => 'required',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'phone' => 'required|string|max:255'
        ]);
        Transaction::create([
            'status' => 'processing',
            'name' => $request->name,
            'message' => $request->message,
            'address' => $request->address,
            'city' => $request->city,
            'zip' => $request->zip,
            'province' => $request->province,
            'phoneNumber' => $request->phone,
            'cart_id' => $user->carts->last()->id,
            'user_id' => Auth::id()
        ]);
        Cart::create([
            'user_id' => Auth::id(),
            'totalPrice' => 0
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return view('visitor.showtransaction', [
            'title' => "Transaction",
            'transaction' => $transaction
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('admin.updatetransaction', [
            'title' => 'Update Transaction',
            'transaction' => $transaction
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        if (Auth::user()->role == 'admin') {
            $transaction->update([
                'status' => $request->status,
                'name' => $request->name,
                'message' => $request->message,
                'address' => $request->address,
                'city' => $request->city,
                'zip' => $request->zip,
                'province' => $request->province,
                'phoneNumber' => $request->phone,
                'status' => $request->status
            ]);
            return redirect('/admint');
        } else {
            $transaction->update([
                'status' => 'cancelled'
            ]);
            return redirect('/transactions');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect('/admint');
    }
}
