<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Models\Food;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', IsAdmin::class]);
    }

    public function index()
    {
        return view('dashboard.index');
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function show()
    {
        return view('dashboard.show');
    }

    public function edit(Food $food)
    {
        return view('dashboard.edit', [
            'food' => $food
        ]);
    }
}
