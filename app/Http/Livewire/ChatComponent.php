<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Livewire\Component;
use App\Events\ChatEvent;

class ChatComponent extends Component
{
    public $message;

    protected $rules = ['message' => 'required|max:140'];

    public function sendMessage()
    {
        $this->validate();
        
        Chat::create([
            'message' => $this->message,
            'user_id' => auth()->user()->id
        ]);

        $this->reset();
        
        event(new ChatEvent);
    }

    public function render()
    {
        return view('livewire.chat-component');
    }
}