<form wire:submit.prevent="sendMessage">
    <div class="d-flex align-items-center gap-2">
        <input type="text" class="form-control rounded-3 @error('message') is-invalid @enderror" placeholder="Message..." wire:model.debounce.500ms="message" autofocus>
        <button type="submit" class="btn btn-primary shadow-sm rounded-3 px-3">
            <i class="fas fa-paper-plane fa-sm"></i>
        </button>
    </div>
</form>