<?php

namespace App\Http\Livewire\Status;

use Carbon\Carbon;
use Livewire\Component;

class Create extends Component
{
    public $body = "";

    public function updated($field)
    {
        $this->validateOnly($field, [
            'body' => 'max:400'
        ]);
    }
    public function store()
    {
        $this->validate([
            'body' => 'required'
        ]);
        $status = auth()->user()->statuses()->create([
            'hash' => \Str::random('22') . strtotime(Carbon::now()),
            'body' => $this->body
        ]);
        $this->emit('statusUpdated', $status->id);
        return redirect('timeline');
    }

    public function render()
    {
        return view('livewire.status.create');
    }
}
