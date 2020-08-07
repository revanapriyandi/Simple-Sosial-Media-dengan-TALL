<?php

namespace App\Http\Livewire\Comment;

use Carbon\Carbon;
use Livewire\Component;

class Create extends Component
{
    public $body = "";
    public $status;

    public function mount($status)
    {
        $this->status = $status;
    }

    public function store()
    {
        $this->validate([
            'body' => 'required'
        ]);

        $commentId = auth()->user()->comments()->create([
            'status_id' => $this->status->id,
            'body' => $this->body,
            'hash' => \Str::random('22') . strtotime(Carbon::now())
        ]);
        $this->body = "";
        $this->emit('commentAdded', $commentId->id);
    }

    public function render()
    {
        return view('livewire.comment.create');
    }
}
