<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // Read All (Admin only)
    public function index()
    {
        return Transaction::with(['customer', 'book'])->get();
    }

    // Show specific (Customer)
    public function show($id)
    {
        return Transaction::with(['customer', 'book'])->findOrFail($id);
    }

    // Create (Customer)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'order_number' => 'required|unique:transactions',
            'customer_id' => 'required|exists:customers,id',
            'book_id' => 'required|exists:books,id',
            'total_amount' => 'required|numeric'
        ]);

        return Transaction::create($validated);
    }

    // Update (Customer)
    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());
        return $transaction;
    }

    // Delete (Admin)
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return response()->json(['message' => 'Transaction deleted']);
    }
}
