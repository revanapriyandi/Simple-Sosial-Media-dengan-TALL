<?php

namespace App\Http\Livewire\Account;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $name;
    public $username;
    public $picture;
    public $deskription;

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->username = auth()->user()->username;
        $this->deskription = auth()->user()->deskription;
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'picture' => $this->picture ? 'image|mimes:png,jpeg,jpg' : '',
            'username' => 'min:3|max:25|unique:users,username,' . auth()->id(),
            'name' => 'min:3|string'
        ]);
    }

    public function update()
    {
        $this->validate([
            'picture' => $this->picture ? 'image|mimes:png,jpeg,jpg' : '',
            'username' => 'required|min:3|max:25|unique:users,username,' . auth()->id(),
            'name' => 'required|min:3|string',

        ]);
        if ($this->picture) {
            Storage::delete(auth()->user()->picture);
            $picture = $this->picture->store('images/profile');
        } else {
            $picture = auth()->user()->picture ?? null;
        }
        auth()->user()->update([
            'name' => $this->name,
            'username' => $this->username,
            'picture' => $picture,
            'deskription' => $this->deskription
        ]);
        $identifier = auth()->user()->usernameOrHash;
        return redirect(route('account.show', $identifier));
    }

    public function render()
    {
        return view('livewire.account.edit');
    }
}
