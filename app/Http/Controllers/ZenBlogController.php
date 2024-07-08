<?php

namespace App\Http\Controllers;

use App\Models\BlogUser;
use App\Models\Category;
use DB;
use App\Models\Blog;
use Illuminate\Http\Request;
use Session;
use function Symfony\Component\Console\Style\table;

class ZenBlogController extends Controller
{
    public function index()
    {
        $blogs = DB::table('blogs')
            ->join('categories', 'blogs.category_id', '=', 'categories.id')
            ->join('authors', 'blogs.author_id', '=', 'authors.id')
            ->select('blogs.*', 'categories.category_name', 'authors.author_name')
            ->where('blogs.status', 1)
//        ->where('blog_type', 'Popular')
            ->orderby('id', 'desc')
            //    ->skip(1)
            // ->take(2)
            ->get();

        return view('frontEnd.home.home', [
            'blogs' => $blogs,
        ]);
    }

    public function blogDetail($slug)
    {
        $blog = DB::table('blogs')
            ->join('categories', 'blogs.category_id', '=', 'categories.id')
            ->join('authors', 'blogs.author_id', '=', 'authors.id')
            ->select('blogs.*', 'categories.category_name', 'authors.author_name')
            ->where('slug', $slug)
            ->first();
        $catId = $blog->category_id;
        $categoryWiseBlogs = DB::table('blogs')
            ->join('categories', 'blogs.category_id', '=', 'categories.id')
            ->join('authors', 'blogs.author_id', '=', 'authors.id')
            ->select('blogs.*', 'categories.category_name', 'authors.author_name')
            ->where('category_id', $catId)
            ->get();

        $comments = DB::table ('comments')
            ->join('blog_users','comments.user_id','blog_users.id')
            ->select('comments.*','blog_users.name')
            ->where('comments.blog_id',$blog->id)
            ->get();

//return $comments;

        return view('frontEnd.blog.blog-detail', [
            'blogs' => $blog,
            'categoryWiseBlogs' => $categoryWiseBlogs,
            'comments' => $comments,
        ]);
    }

    public function contactDetail()
    {
        return view('frontEnd.contact.contact-detail');
    }

    public function aboutDetail()
    {
        return view('frontEnd.about.about');
    }

    public function category($id)
    {
        $categoryWiseBlogs = DB::table('blogs')
            ->join('categories', 'blogs.category_id', '=', 'categories.id')
            ->join('authors', 'blogs.author_id', '=', 'authors.id')
            ->select('blogs.*', 'categories.category_name', 'authors.author_name')
            ->where('blogs.category_id', $id)
            ->get();
        $category = Category::where('id', $id)->first();
        return view('frontEnd.categories.category', [
            'categoryWiseBlogs' => $categoryWiseBlogs,
            'category' => $category,
        ]);
    }

    public function userRegister()
    {
        return view('frontEnd.user.user-register');
    }

    public function saveUser(Request $request)
    {
        BlogUser::saveUser($request);
        return back();
    }

    public function loginUser()
    {
        return view('frontEnd.user.user-login');
    }

    public function checkLogin(Request $request)
    {
        $userInfo = BlogUser::where('email', $request->user_name)
            ->orWhere('phone', $request->user_name)->first();

        if ($userInfo) {
            $existingPass = $userInfo->password;
            if (password_verify($request->password, $existingPass)) {
                Session::put('userId', $userInfo->id);
                Session::put('userName', $userInfo->name);
                return redirect('/');
            } else {
                return back()->with('message', 'Please use valid password');
            }
        } else {
            return back()->with('message', 'Please use valid Phone or Email');
        }
    }

    public function logout(){
        Session::forget('userId');
        Session::forget('userName');
        return redirect('/');
    }

    public function apiBlogDetails($id){
        $blog = DB::table('blogs')
            ->join('categories', 'blogs.category_id', '=', 'categories.id')
            ->join('authors', 'blogs.author_id', '=', 'authors.id')
            ->select('blogs.*', 'categories.category_name', 'authors.author_name')
            ->where('blogs.id', $id)
            ->first();
        return json_encode($blog);
    }
}
