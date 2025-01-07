<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
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
        return view('site.projects');
    }

    public function faq()
    {
        return view('site.FAQ');
    }

    public function team()
    {
        return view('site.team');
    }

    public function blog() {
        $blogs = Blog::latest('id')->take(3)->get();
        return view('site.blog', compact('blogs'));
    }

    public function single_blog($blogId) {
        $blog = Blog::findOrFail($blogId);
        return view('site.blog-details', compact('blog'));
    }

    public function contact_us() {
            return view('site.contact-us');
    }
}
