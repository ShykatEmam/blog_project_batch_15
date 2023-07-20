<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $category;
    public function index(){
        $this->category=Category::all();
        return view('admin.category.category',[
            'categories'=>$this->category,
        ]);
    }
    public function saveCategory(Request $request){
        Category::saveCategory($request);
        return back();
    }
    public function editCategory($id){
        $this->category = Category::find($id);
        return view('admin.category.edit-category',[
            'category'=>$this->category,
        ]);
    }
    public function updateCategory(Request $request){
        $this->category = Category::find($request->id);
        $this->category->category_name = $request->category_name;
        $this->category->status = $request->status;
        $this->category->save();

        return redirect(route('category'));
    }
    public function deleteCategory(Request $request){
        $this->category = Category::find($request->id);
        $this->category->delete();
        return back();
    }
}
