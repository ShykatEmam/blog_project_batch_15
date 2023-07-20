<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public $author;
    public function index(){
        $this->author=Author::all();
        return view('admin.author.author',[
            'authors'=>$this->author,
        ]);
    }
    public function saveAuthor(Request $request){
        Author::saveAuthor($request);
        return back();
    }
    public function editAuthor($id){
        $this->author = Author::find($id);
        return view('admin.author.edit-author',[
            'author'=>$this->author,
        ]);
    }
    public function updateAuthor(Request $request){
        $this->author = Author::find($request->id);
        $this->author->author_name = $request->author_name;
        $this->author->save();

        return redirect(route('author'));
    }
    public function deleteAuthor(Request $request){
        $this->author = Author::find($request->id);
        $this->author->delete();
        return back();
    }
}
