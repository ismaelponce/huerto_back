<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function myOrders($id){
        $orders = User::find($id)->products;
        return response()->json($orders, 200);
    }

    public function makeOrder(Request $request, $id){
        $user = User::find($id);
        foreach ($request->all() as $order) {
            $user->products()->attach($order['id'] ,['amount' => $order['amount']]);
            $p = Product::find($order['id']);
            $p->stock = $p->stock - $order['amount'];
            $p->save();
        }
        return response()->json(['message' => 'Order created'], 200);
    }
}
