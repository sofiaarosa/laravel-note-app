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

    public function find($id){
        $data = JournalPage::find($id);
        return view('event-page', compact('data'));
    }

    public function update(Request $req, $id){
        $data = $req->all();
        $result = JournalPage::find($id)->update($data);
        return redirect()->route('journal.index');
    }

    public function delete($id){
        $result = JournalPage::find($id)->delete();
        return redirect()->route('journal.index');
    }
}
