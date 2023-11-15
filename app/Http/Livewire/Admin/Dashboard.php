<?php

namespace App\Http\Livewire\Admin;

use App\Models\cliente;
use App\Models\direccionn;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
     
        return view('livewire.admin.dashboard');
    }
}
