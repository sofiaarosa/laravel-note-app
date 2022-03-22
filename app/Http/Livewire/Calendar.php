<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use App\Models\JournalProject\JournalPage;
use Illuminate\Support\Collection;
use Illuminate\Support\Carbon;

//first test of LivewireCalendar -> no database connection
class Calendar extends LivewireCalendar
{
    public function events(): Collection
    {
        return collect([
            [
                'id' => 1,
                'title' => 'Breakfast',
                'description' => 'Pancakes! 🥞',
                'date' => Carbon::today(),
            ],
            [
                'id' => 2,
                'title' => 'Meeting with Pamela',
                'description' => 'Work stuff',
                'date' => Carbon::tomorrow(),
            ],
        ]);
    }
}
