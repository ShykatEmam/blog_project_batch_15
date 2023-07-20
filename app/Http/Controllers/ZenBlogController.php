<?php

namespace App\Http\Controllers;
use App\Models\BlogUser;
use App\Models\Category;
use DB;
use App\Models\Blog;
use Illuminate\Http\Request;
use Session;

class ZenBlogController extends Controller
{
    public $blog,$category;
    public function index(){
//        $this->blog = Blog::where('status',1)
//            ->where('blog_type','trending')
//            ->orderby('id','desc')
//            ->take(4)
////            ->skip(1)
//            ->get();
//        $this->category = Category::all();
//        $this->category = DB::table('categories')
//            ->where('categories.status',1)
//            ->get();
        $this->blog = DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name')
            ->where('blogs.status',1)
            ->where('blog_type','trending')
            ->orderby('id','desc')
            ->take(4)
            ->get();
        return view('frontEnd.home.home',[
            'blogs'=>$this->blog,
//            'cats' =>$this->category,
        ]);
    }
    public $blogWithCateogory,$catId;
    public function blogDetail($slug){
        $this->blog = DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name')
            ->where('slug',$slug)
            ->first();
        $this->catId=$this->blog->category_id;
        $this->blogWithCateogory = DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name')
            ->where('category_id',$this->catId)
            ->take(4)
            ->get();
//        return  $this->blog;
        return view('frontEnd.blog.blog-details',[
            'blog'=>$this->blog,
            'blogWithCateogory'=>$this->blogWithCateogory,
        ]);
    }
    public function about(){
        return view('frontEnd.other.about');
    }

    public function contact(){
        return view('frontEnd.other.contact');
    }
    public $blogWithCategory;
    public function category($id){
        $this->blogWithCategory = DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name')
            ->where('category_id',$id)
            ->get();
        $this->category = Category::find($id);
        return view('frontEnd.other.category',[
            'categories'=>$this->blogWithCategory,
            'category'=>$this->category,
        ]);
    }

    public function search(){
        return view('frontEnd.other.search');
    }
    public function userRegistration(){
        return view('frontEnd.user.user-register');
    }
    public function newUserRegistration(Request $request){
        BlogUser::saveUser($request);
        return back();
    }
    public function userLogin(){
        return view('frontEnd.user.user-login');
    }
    public $userInfo;
    public function userLoginCheck(Request $request){
        $this->userInfo = BlogUser::where('email',$request->user_name)
            ->orWhere('phone',$request->user_name)
            ->first();
        if($this->userInfo){
            if(password_verify($request->password,$this->userInfo->password)){
                session::put('userId',$this->userInfo->id);
                Session::put('userName',$this->userInfo->name);

                return redirect('/');
            }
            else{

                return back()->with('message','please use valid password');
            }

        }
        else{
            return back()->with('message','please use valid username');
        }

        return $request;
    }
    public function logout(){
        Session::forget('userId');
        Session::forget('userName');
        return redirect('/');
    }
}
