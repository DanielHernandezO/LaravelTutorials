<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function create(): view
    {
        return view('order.create');
    }

    public function index(Request $request): view
    {
        $viewData = [];
        $viewData['subtitle'] = 'List of orders';
        $viewData['orders'] = Order::all();

        return view('order.index')->with('viewData', $viewData);
    }

    public function show(int $id): View|RedirectResponse
    {
        $viewData = [];
        $order = Order::findOrFail($id);
        $viewData['subtitle'] = 'Order information';
        $viewData['order'] = $order;

        return view('order.show')->with('viewData', $viewData);
    }

    public function save(Request $request): view
    {
        $orders = Order::all();
        $request->validate([
            'status' => ['required', 'string'],
            'comment' => ['string'],
            'price' => ['required', 'numeric', 'gt:0'],
        ]);
        Order::create($request->only(['status', 'comment', 'price']));

        return view('order.save');
    }

    public function delete(int $id): RedirectResponse
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('order.index');
    }
}
