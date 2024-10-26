<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Product;
use App\Models\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    function adminHome(){
        return view('admin.index');
    }

    function userHome(){
        return view('user.index');
    }

    public function GetChartOrder() {
        $order = Order::pluck('tanggal_ticket');
        return response()->json($order);
    }
}
