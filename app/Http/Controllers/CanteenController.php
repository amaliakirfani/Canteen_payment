<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CanteenController extends Controller
{
    public function show_menu()
    {
        return view('canteen.show_menu');
    }

    public function new_order(Request $r)
    {
        if ($r->isMethod('POST')) {
            $menu_id = $r->input('menu_id');

            if (empty($menu_id)) {
                return response()->json([
                    "code" => 400,
                    "message" => "Silahkan Pilih Menu Terlebih Dahulu",
                ], 400);
            }

            $r = Http::post(env('CANTEEN_API') . '/v1/neworder', [
                "menu_id" => $menu_id,
            ]);

            if ($r['code'] == 200) {
                return response()->json([
                    "code" => 2200,
                    "message" => "success order",
                ]);
            } else {
                return response()->json([
                    "code" => 2300,
                    "message" => "failed order",
                ]);
            }

        }

        $menu_list = Http::get(env('CANTEEN_API') . '/v1/menu_list');
        $data = [
            "menu_list" => $menu_list,
        ];

        return view('canteen.new_order', ['data' => $data]);
    }

    public function list_order()
    {
        return view('canteen.list_order');
    }

    public function users()
    {
        return view('canteen.users');
    }
}
