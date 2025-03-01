<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Feedback;
use App\Models\Project;
use App\Models\User;
use App\Notifications\NewContact;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $feedbacks = Feedback::orderBy('id', 'desc')->limit(4)->get();
        return view('site.team', compact('feedbacks'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('publish_date', 'DESC')->limit(3)->get();
        $blogs2 = Blog::orderBy('publish_date', 'DESC')->limit(3)->offset(3)->get();
        return view('site.blog', compact('blogs', 'blogs2'));
    }

    public function single_blog($blogId)
    {
        $blog = Blog::findOrFail($blogId);
        $blogPublishDate = Carbon::parse($blog->publish_date);
        return view('site.blog-details', compact('blog', 'blogPublishDate'));
    }

    public function contact_us()
    {
        return view('site.contact-us');
    }

    public function soon()
    {
        return view('site.soon');
    }

    public function contact_data(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'company' => 'required|string',
            'message' => 'required|string',
        ]);
        $admins = User::all();
        foreach ($admins as $admin) {
            $admin->notify(new NewContact($request->name, $request->email, $request->phone, $request->company, $request->message));
        }
        return redirect()->back()->with(['msg' => 'We were notified of your message and we\'ll respond as soon as possible! ', 'type' => 'info']);
    }
}
