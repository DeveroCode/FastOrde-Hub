<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class HeaderAdminStats extends Component
{
    public $earnings;
    public $allOrders;
    public $allUsers;
    public function mount()
    {
        $this->earnings = $this->getAllGains();
        $this->allOrders = $this->getAllOrders();
        $this->allUsers = $this->getAllEmployees();
    }
    public function getAllGains()
    {
        return DB::table('food_purchase_summary')->sum('total_price');
    }

    public function getAllOrders()
    {
        return DB::table('purchase_summaries')->count();
    }

    public function getAllEmployees()
    {
        return DB::table('users')->where('rol', '!=', 'admin')->count();
    }

    public function loaders()
    {
        $this->earnings = $this->getAllGains();
        $this->allOrders = $this->getAllOrders();
        $this->allUsers = $this->getAllEmployees();
    }

    public function render()
    {
        return view('livewire.admin.header-admin-stats');
    }
}
