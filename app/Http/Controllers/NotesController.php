<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
    //
    public function getAll(){
        $data = Note::all();
        return view('journal-menu', compact('data'));
    }

    public function create(Request $req){
        $data = $req->all();
        $result = Note::create($data);
        return redirect()->route('notes.index');
    }

    public function find($id){
        $data = Note::find($id);
        return view('event-page', compact('data'));
    }

    public function update(Request $req, $id){
        $data = $req->all();
        $result = Note::find($id)->update($data);
        return redirect()->route('notes.index');
    }

    public function delete($id){
        $result = Note::find($id)->delete();
        return redirect()->route('notes.index');
    }
}
