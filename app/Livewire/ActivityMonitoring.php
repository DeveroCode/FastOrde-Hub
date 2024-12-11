<?php

namespace App\Livewire;

use App\Models\ActivitiesUsers;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ActivityMonitoring extends Component
{
    use WithPagination;

    public function getAct()
    {
        return ActivitiesUsers::orderBy('created_at', 'desc')->paginate(6);
    }
    public function render()
    {
        return view('livewire.admin.activity-monitoring', ['activities' => $this->getAct()]);
    }
}
