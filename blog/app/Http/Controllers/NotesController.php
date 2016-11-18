<?php
namespace App\Http\Controllers;


use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::get();

        return view('index')->with(['notes' => $notes]);
    }

    public function add()
    {
        return view('add');
    }


    public function delete(Request $request, $id)
    {
        Note::findOrFail($id)->delete();

        return redirect('notes');
    }

    public function addNote(Request $request)
    {
        // Hier voegen we hem zo toe aan de database
        $input = $request->all();

        if (!$input['text']) {
            return response('Text can\'t be empty!');
        }

        $note = Note::create([
            'title' => $input['title'],
            'text' => $input['text'],
            'technology' => $input['technology'],
        ]);

        return redirect('notes');
    }
}