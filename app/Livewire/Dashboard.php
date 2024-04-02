<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }

    #[On('echo:dashboard,OrderShipped')]

    public function dump($payload)
    {

        dd($payload);

    }
}
