<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CanteenController extends Controller
{
    public function show_menu()
    {
        return view('canteen.show_menu');
    }

    public function new_order()
    {
        return view('canteen.new_order');
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
