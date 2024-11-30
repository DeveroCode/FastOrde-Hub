<?php

namespace App\Http\Controllers;

use App\Models\Food;

abstract class Controller
{
    public function create(Food $food) {}
}
