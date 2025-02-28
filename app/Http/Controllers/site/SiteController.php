<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Feedback;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class SiteController extends Controller
{
    public function index()
    {
        $bigProject = Project::orderBy('id', 'desc')->first();
        $projects = Project::orderBy('id', 'desc')->offset(1)->limit(4)->get();
        $feedbacks = Feedback::orderBy('id', 'desc')->limit(4)->get();
        $blogs = Blog::orderBy('publish_date', 'desc')->limit(4)->get();
        return view('site.index', compact('feedbacks', 'bigProject', 'projects', 'blogs'));
    }

    public function about_us()
    {
        return view('site.about-us');
    }

    public function services()
    {
        return view('site.services');
    }

    public function projects()
    {
        $projects = Project::orderby('id', 'DESC')->limit(8)->get();
        return view('site.projects', ['projects' => $projects]);
    }

    public function faq()
    {
        return view('site.FAQ');
    }

    public function team()
    {
        return view('site.team');
    }

    public function blog()
    {
        $blogs = Blog::latest('id')->take(3)->get();
        return view('site.blog', compact('blogs'));
    }

    public function single_blog($blogId)
    {
        $blog = Blog::findOrFail($blogId);
        return view('site.blog-details', compact('blog'));
    }

    public function contact_us()
    {
        return view('site.contact-us');
    }

    public function soon() {
        return view('site.soon');
    }
}
