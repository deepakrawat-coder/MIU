<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\EventsPost;
use App\Models\School;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Laravel\Prompts\Concerns\Events;

class WebHomeController extends Controller
{
    public function index()
    {
        $schools = School::where('status', 1)
            ->orderBy('order', 'asc')
            ->limit(6)
            ->get()
            ->map(function ($school) {
                $features = json_decode($school->features, true);
                $school->features_comma = is_array($features) ? implode(', ', $features) : '';
                return $school;
            });
        // dd($schools->all()); // <-- REMOVE THIS LINE or comment it out

        $Testimonials = Testimonial::where('status', 1)->where('page_type', 'home')->get();
        // dd($Testimonials);

        $events = EventsPost::with('category')->where('category_id', 1)->where('status', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        $blogs = Blog::where('status', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        // dd($blogs);

        return view('web.pages.index', compact('schools', 'Testimonials', 'events', 'blogs'));
    }
}
