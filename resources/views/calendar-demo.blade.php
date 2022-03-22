@extends('materialize.imports')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LiveWire Calendar Demo</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('materialize/starter-template/css/style.css') }}">
    <style>
        .flex-center {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }

    </style>

    @livewireStyles
</head>

<body>
    @section('body')
        @include('materialize.layout.navbar')
        <div class="flex-center">
            <div class="half-width">
                <livewire:notes-calendar
                before-calendar-view="calendar.calendar-header"
                event-view="calendar.event-view"
                />
            </div>
        </div>
        <div class="fixed-action-btn">
            <a class="btn-floating waves-effect waves-light right btn-large orange" href="{{ route('notes.add') }}"><i
                class="material-icons">add</i></a>
        </div>
        @livewireScripts
        @livewireCalendarScripts
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="{{ asset('materialize/starter-template/js/init.js') }}"></script>
    @endsection
</body>

</html>
