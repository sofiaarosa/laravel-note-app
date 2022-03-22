<?php

namespace App\Http\Controllers\JournalProject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JournalProject\JournalPage;

class JournalPageController extends Controller
{
    //
    public function getAll(){
        $data = JournalPage::all();
        return view('journal-menu', compact('data'));
    }

    public function create(Request $req){
        $data = $req->all();
        $result = JournalPage::create($data);
        return redirect()->route('journal.index');
    }
}
