<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blogs;

    public function __construct()
    {
        $this->blogs = new Blog();
    }

    public function index()
    {
        $blogs = Blog::all();
        return view('pages.blog', compact('blogs'));
    }

    public function singleBlog($title)
    {
        $blog = Blog::where('title', $title)->firstOrFail();
        $popular_posts = Blog::inRandomOrder()->limit(6)->get();
        return view('pages.single-blog', compact('blog', 'popular_posts'));
    }

    public function dashboardIndex()
    {
        $blogs = Blog::all();
        return view('pages.admin.blogs', compact('blogs'));
    }

    public function getArchivedBlogs()
    {
        $blogs = $this->blogs->onlyTrashed()->get();
        return view('pages.admin.blogs-deleted', compact('blogs'));
    }

    public function addBlogs()
    {
        return view('pages.admin.add-blogs');
    }

    public function archiveBlog($id)
    {
        $this->blogs->where('id', $id)->delete();
        return redirect()->back()->with('status', 'Blog archived successfully');
    }
    
    public function restoreBlog($id)
    {
        $this->blogs->where('id', $id)->onlyTrashed()->restore();
        return redirect()->back()->with('status', 'Blog restored successfully');
    }

    public function saveAddBlogs()
    {
        $this->blogs->create([
            'title' => request()->title,
            'category'  => request()->category,
            'quote' => request()->quote,
            'cite'  => request()->cite,
            'content_1' => request()->content_1,
            'content_2' => request()->content_2,
            'content_3' => request()->content_3,
            'content_4' => request()->content_4,
        ]);

        return redirect()->route('dashboard.blogs')->with('status', 'Blog created successfully');
    }
}
