<div>
    <ul>
        @foreach($messages as $message)
            <li>
                {{ $message->message }}
                <button wire:click="removeMessage('{{ $message->id }}')">X</button>
            </li>
        @endforeach
    </ul>
</div>