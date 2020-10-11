<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CanteenController extends Controller
{
    public function show_menu(Request $r)
    {
        if ($r->isMethod('POST') ){
            $menu_name = $r->input('menu_name');
            $menu_image = $r->input('menu_image');
            $menu_price = $r->input('menu_price');

             $response = Http::post(env('CANTEEN_API') . '/v1/menu', [
            'menu_name' => $menu_name,
            'menu_image' => $menu_name,
            'menu_price' => $menu_price,
        ]);
    };
    
        $menu_list = Http::get(env('CANTEEN_API') . '/v1/menu_list');
        $data = [
            "menu_list" => $menu_list,
        ];

       

        return view('canteen.show_menu', ['menu' => $menu_list]);
    }

    public function new_order(Request $r){

        $menu_list = Http::get(env('CANTEEN_API') . '/v1/menu_list');
        $data = [
            "menu_list" => $menu_list,
        ];

        return view('canteen.new_order', ['data' => $data]);
    }

    public function list_order()
    {
        $order_list = Http::get(env('CANTEEN_API') . '/v1/order_list');
        $data = [
            "order_list" => $order_list,
        ];
        // return $order_list;
        return view('canteen.list_order', ['data' => $data]);
    }

    public function users()
    {
        $users_list = Http::get(env('CANTEEN_API') . '/v1/users_list');
        $data = [
            "users_list" => $users_list,
        ];
        
        return view('canteen.users', ['data' => $data]);
    }
}
