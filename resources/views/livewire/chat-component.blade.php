<form wire:submit.prevent="sendMessage">
    <div>
        <input type="text" wire:model.debounce.500ms="message">
        <button type="submit">Send</button>
    </div>
</form>