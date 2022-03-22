<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Illuminate\Support\Collection;
use App\Models\JournalProject\JournalPage;
use Illuminate\Support\Carbon;

// change the extends from Component to LivewireCalendar
class JournalCalendarView extends LivewireCalendar
{
    //Delete the default function 'render'
    //Create function event() that returns a collection
    public function events(): Collection
    {
        return JournalPage::query()
        // ->whereDate('created_at', '>=', $this->gridStartsAt)
        // ->whereDate('created_at', '<=', $this->gridEndsAt)
        ->get()
        ->map(function (JournalPage $model) {
            return [
                'id' => $model->id,
                'title' => $model->title,
                'description' => $model->notes,
                'body' => $model->body,
                'date' => $model->created_at,
            ];
        });
    }

    public function hello(){
        echo "hello!";
    }
}
