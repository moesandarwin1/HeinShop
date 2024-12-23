<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function orders(){
        $orders = Order::all();
        $voucher_group = $orders->groupBy('voucher_no')->toArray();
        //dd($voucher_group);
        foreach($voucher_group as $voucher){
            $orders_id = array_column($voucher,'id');
            //var-dump('$orders_id');
            $order_data[] = Order::whereIn('id', $orders_id)->where('status','Pending')->first();


        }

        return view('admin.orders.index',compact('order_data'));
    }
    public function orderAccept(){
        
    }
}
