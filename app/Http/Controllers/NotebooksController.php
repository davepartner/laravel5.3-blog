<?php

namespace App\Http\Controllers;
use App\Notebook;
use App\Note;
use Auth;
use Illuminate\Http\Request;

class NotebooksController extends Controller
{
    //

    public function index(){
        $user = Auth::user();
        $notebooks = $user->notebooks; //fetch all data from database
        return view('notebooks.index', compact('notebooks'));
    }

    public function postCreateNotebook(Request $request){
        $user = Auth::user();
        $notebook = $user->notebooks()->create($request->all()); //save everything
        $notebooks = Notebook::all();
        return view('notebooks.index', compact('notebooks'));
    }

    public function putNotebook(Request $request, $id){
      $notebook = Notebook::where('id', $id)->first();
      $user = Auth::user();
      $user->notebooks()->update($request->all());
      return redirect('notebooks/view/'.$id);
    }

    public function getViewNotebook($id){
      $notebook = Notebook::where('id', $id)->first();
      //  $notes = Note::where('notebook_id', $id)->all();
        return view('notebooks.view', compact('notebook'));
    }

    public function getEditNotebook($id){
        $notebook = Notebook::where('id', $id)->first();
        return view('notebooks.edit', compact('notebook'));
    }

    public function putEditNotebook(Request $request, $id){
      $user = Auth::user();
        $notebook = Notebook::where('id', $id)->first();
        $user->notebook->update($request->all()); //save
        return view('notebooks.view', compact('notebook'));
    }

    public function getDeleteNotebook($id){
      $notebook = Notebook::where('id', $id)->first();
      $notebook->delete();
      $notebooks = Notebook::all();
      return redirect('/notebooks');
    }
}
