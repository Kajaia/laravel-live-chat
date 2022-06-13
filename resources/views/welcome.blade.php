<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Live Chat</title>
    @livewireStyles
</head>
<body>
    <livewire:message-component />
    <livewire:chat-component />
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>