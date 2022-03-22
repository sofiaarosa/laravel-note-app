<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use App\Models\Note;
use Illuminate\Support\Collection;

class NotesCalendar extends LivewireCalendar
{
    public function events(): Collection
    {
        return Note::query()
        // ->whereDate('created_at', '>=', $this->gridStartsAt)
        // ->whereDate('created_at', '<=', $this->gridEndsAt)
        ->get()
        ->map(function (Note $model) {
            return [
                'id' => $model->id,
                'title' => $model->title,
                'description' => $model->cathegory,
                'body' => $model->body,
                'color' =>$model->color,
                'date' => $model->created_at,
            ];
        });
    }
}
