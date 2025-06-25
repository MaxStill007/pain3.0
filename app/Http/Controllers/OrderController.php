<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create()
    {
        return view('orders.order');
    }

    public function userOrders()
    {
        $orders = Orders::where('user_email', Auth::user()->email)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('orders.profile', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'amount' => 'required|numeric|min:0',
        ]);

        Orders::create([
            'user_name' => Auth::user()->name,
            'user_email' => Auth::user()->email,
            'title' => $request->title,
            'description' => $request->description,
            'amount' => $request->amount,
            'status' => 'pending'
        ]);

        return redirect()->route('home')->with('success', 'Заказ успешно создан!');
    }

    // Остальные методы можно оставить пустыми или удалить
}