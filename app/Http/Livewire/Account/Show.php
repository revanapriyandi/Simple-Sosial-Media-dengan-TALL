<?php

namespace App\Http\Livewire\Account;

use App\Models\User;
use Livewire\Component;
use App\Models\Timeline\Status;

class Show extends Component
{
    public $user;
    public $perPage = 10;
    public $bio;
    public $readmore = true;

    public function mount($identifier)
    {
        $this->user = User::where('username', $identifier)->orWhere('hash', $identifier)->first();
        $this->bio = \Str::limit($this->user->deskription, 120);
    }

    public function readMore()
    {
        $this->bio = $this->user->deskription;
        $this->readmore = false;
    }

    public function less()
    {
        $this->bio = \Str::limit($this->user->deskription, 120);
        $this->readmore = true;
    }

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function render()
    {
        $statuses = $this->user->statuses()->with('user')->latest()->paginate($this->perPage);
        return view('livewire.account.show', compact('statuses'));
    }
}
