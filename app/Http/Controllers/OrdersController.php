<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\IsUser;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', IsUser::class]);
    }

    public function index()
    {
        return view('orders.index');
    }
    public function show()
    {
        return view('orders.check');
    }

    public function store()
    {
        return view('orders.store');
    }
}