<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Livewire\Component;
use App\Events\ChatEvent;
use App\Events\ChatCleared;

class ChatComponent extends Component
{
    public $message;

    public function sendMessage()
    {
        Chat::create(['message' => $this->message]);

        $this->reset();
        
        event(new ChatEvent);
    }

    public function render()
    {
        return view('livewire.chat-component');
    }
}