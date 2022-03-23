<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class NotesController extends Controller
{
    //
    public function getAll(){
        $data = Note::all();
        return view('journal-menu', compact('data'));
    }

    public function create(Request $req){
        $data = $req->all();
        // foreach ($data as $key => $value) {
        //     echo $key;
        //     echo "-";
        //     echo $value;
        //     echo "<br>";
        // }
        $result = Note::create($data);
        return redirect()->route('notes.index');
    }

    public function find($id){
        $data = Note::find($id);
        return view('event-page', compact('data'));
    }

    public static function getCathegories(){
        $data = DB::table('notes')->select('cathegory')->distinct()->get();
        $arrayData = [];
        foreach ($data as $d) {
            echo $d->cathegory.":".'null'.',';
        }
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
