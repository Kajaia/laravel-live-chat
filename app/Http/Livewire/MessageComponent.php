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
        Chat::destroy($id);

        event(new ChatEvent);
    }

    public function render()
    {
        return view('livewire.message-component', [
            'messages' => Chat::orderBy('id', 'desc')
                ->take(5)
                ->get()
        ]);
    }
}