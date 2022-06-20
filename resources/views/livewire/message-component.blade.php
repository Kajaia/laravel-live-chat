<div>
    @if(!$messages->count())
        <div class="text-center mb-3">No messages!</div>
    @else
        <div class="mb-2 d-flex flex-column-reverse">
            @foreach($messages as $message)
                <div class="row @if($message->user_id === auth()->user()->id) justify-content-end @else justify-content-start @endif">
                    <div class="col-auto d-flex align-items-start gap-2">
                        @if($message->user_id !== auth()->user()->id)
                            <div title="{{ $message->user->name }}">
                                <img class="rounded-pill" src="{{ 'https://ui-avatars.com/api/?uppercase=true&bold=true&background=0d6efd&color=ffffff&size=32&name=' . $message->user->name }}" alt="{{ $message->user->name }}">
                            </div>
                        @endif
                        <div class="rounded-3 @if($message->user_id === auth()->user()->id) bg-primary text-white @else bg-light text-dark @endif shadow-sm mb-2 py-2 px-3 d-flex align-items-start justify-content-between gap-2">
                            <div>
                                <p class="m-0">{{ $message->message }}</p>
                                <small title="{{ Carbon\Carbon::parse($message->created_at)->format('H:i:s d-m-Y') }}">{{ Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</small>
                            </div>
                            @if($message->user_id === auth()->user()->id)
                                <button class="bg-transparent border-0 p-0" wire:click="removeMessage('{{ $message->id }}')">
                                    <i class="fas fa-times fa-xs text-white"></i>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>