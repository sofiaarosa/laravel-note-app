<?php

namespace App\Models\JournalProject;

use Illuminate\Database\Eloquent\Model;

class JournalPage extends Model
{
    //
    protected $table = 'pages';
    protected $fillable = [
        'title', 'notes', 'body'
    ];

    public $incrementing = true;
    public $timestamps = true;
}
