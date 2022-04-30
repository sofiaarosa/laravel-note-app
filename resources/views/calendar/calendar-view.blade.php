<head>
    <style>
        .container{
            width: 90%;
        }
        .row{
            /* grid-template-columns: repeat(14,14.3%) */
        }
    </style>
</head>

<body>
    <div>
        @if ($pollMillis !== null && $pollAction !== null)
            wire:poll.{{ $pollMillis }}ms="{{ $pollAction }}"
        @elseif($pollMillis !== null)
            wire:poll.{{ $pollMillis }}ms
        @endif
        <div>
            @includeIf($beforeCalendarView)
        </div>

        <div class="container">
            <div class="row">
                @foreach ($monthGrid->first() as $day)
                    <div class="col s2">@include($dayOfWeekView, ['day' => $day])</div>
                @endforeach
            </div>

        </div>



        <div>
            @includeIf($afterCalendarView)
        </div>
    </div>
</body>
