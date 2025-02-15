<?php

declare(strict_types=1);

namespace App\Livewire;

use Facades\App\Services\TopDesk;
use Livewire\Component;

final class Dashboard extends Component
{
    public function render()
    {
        dd(TopDesk::getTotalOpenIncidents());

        return view('livewire.dashboard');
    }
}
