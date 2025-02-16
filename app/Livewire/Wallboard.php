<?php

declare(strict_types=1);

namespace App\Livewire;

use Facades\App\Services\TopDesk;
use Livewire\Component;

final class Wallboard extends Component
{
    public int $totalOpenIncidents = 0;

    public function mount()
    {
        $this->totalOpenIncidents = TopDesk::getTotalOpenIncidents();
    }

    public function render()
    {
        return view('livewire.wallboard');
    }
}
