@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header border-light bg-white">
                <h6 class="m-0">Chat</h6>
            </div>
            <div class="card-body">
                <livewire:message-component />
                <livewire:chat-component />
            </div>
        </div>
    </div>
</div>
@endsection