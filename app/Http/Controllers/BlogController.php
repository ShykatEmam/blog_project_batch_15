<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Author;
use App\Models\Blog;
use DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blog;
    public function index()
    {

        return view('admin.blog.blog', [
            'categories' => Category::all(),
            'authors' => Author::all(),
        ]);
    }
    public function manageBlog()
    {
        $this->blog = DB::table('blogs')
            ->join('categories', 'blogs.category_id', '=', 'categories.id')
            ->join('authors', 'blogs.author_id', '=', 'authors.id')
            ->select('blogs.*', 'categories.category_name', 'authors.author_name')
            ->get();
        return view('admin.blog.manage-blog', [
            'blogs' => $this->blog,
        ]);
    }

    public function updateBlog(Request $request){
        $this->blog = Blog::find($request->id);
        $this->blog->category_id = $request->category_id;
        $this->blog->author_id = $request->author_id;
        $this->blog->title = $request->title;
        $this->blog->slug = $this->makeSlug($request);
        $this->blog->description = $request->description;
        if ($request->file('image') != null){

            $this->blog->image = $this->saveImage($request);
        }
        $this->blog->date = $request->date;
        $this->blog->blog_type = $request->blog_type;
        $this->blog->save();

        return redirect(route('manage.blog'));
    }

    public function editBlog($id){
        $this->blog = Blog::find($id);
        return view('admin.blog.edit-blog', [
            'categories' => Category::all(),
            'authors' => Author::all(),
            'blog'=>$this->blog,
        ]);
    }
    public function saveBlog(Request $request)
    {
        $this->blog = new Blog();
        $this->blog->category_id = $request->category_id;
        $this->blog->author_id = $request->author_id;
        $this->blog->title = $request->title;
        $this->blog->slug = $this->makeSlug($request);
        $this->blog->description = $request->description;
        $this->blog->image = $this->saveImage($request);
        $this->blog->date = $request->date;
        $this->blog->blog_type = $request->blog_type;
        $this->blog->status = $request->status;
        $this->blog->save();
        return back();
    }

    public $changer;
    public function status($id){
        $this->changer = Blog::find($id);
        if ($this->changer->status == 1){
            $this->changer->status = 2;
        }
        else{
            $this->changer->status = 1;
        }
        $this->changer->save();
        return back();
    }
    public function deleteBlog(Request $request){
        $this->blog = Blog::find($request->blog_id);
        if ($this->blog->image != null){
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return back();
    }





















    public $image, $imageName, $imageUrl, $directory;
    public function saveImage($request)
    {
        $this->image = $request->file('image');
        $this->imageName = rand().'.'.$this->image->extension();
        $this->directory = 'admin/upload-image/blog-image/';
        $this->imageUrl = $this->directory . $this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }



    public function makeSlug($request)
    {
        if ($request->slug) {
            $str = $request->slug;
            return preg_replace('/\s+/u', '-', trim($str));
        }
        $str = $request->title;
        return preg_replace('/\s+/u', '-', trim($str));
    }
}
