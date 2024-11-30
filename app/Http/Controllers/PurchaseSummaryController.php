<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseSummaryController extends Controller
{
    public function index()
    {
        return view('orders.index');
    }
}
