<?php

namespace App\Http\Livewire\Users;

use App\Models\cliente;
use App\Models\conceptos;
use App\Models\deud;
use App\Models\direccionn;
use Illuminate\Support\Carbon;
use Livewire\Component;

class User extends Component
{
    public function render()
    {
        
        return view('livewire.users.user');
    }
}
