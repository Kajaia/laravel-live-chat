<?php

namespace App\Http\Livewire;

use App\Events\ChatEvent;
use App\Models\Chat;
use Livewire\Component;

class MessageComponent extends Component
{

    protected $listeners = ['echo:chat,ChatEvent' => '$refresh'];

    public function removeMessage($id)
    {
        Chat::findOrFail($id)->delete();

        event(new ChatEvent);
    }

    public function render()
    {
        return view('livewire.message-component', [
            'messages' => Chat::all()
        ]);
    }
}