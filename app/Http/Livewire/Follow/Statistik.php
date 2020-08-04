<?php

namespace App\Http\Livewire\Follow;

use Livewire\Component;

class Statistik extends Component
{
    public $user;
    protected $listeners = ['statisticUpdated'];

    public function statisticUpdated()
    {
    }

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.follow.statistik');
    }
}
