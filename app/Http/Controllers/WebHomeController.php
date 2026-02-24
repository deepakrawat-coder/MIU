<?php

namespace App\Http\Controllers;

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
                return [
                    'link' => $school->slug,
                    'image' => $school->image ? asset($school->image) : null,
                    'title' => $school->name,
                    'description' => $school->short_description,
                    'features' => !empty($school->features)
                        ? array_map(
                            'trim',
                            explode(',', implode(',', json_decode($school->features, true)))
                        )
                        : [],
                ];

            });
        // dd($schools);
        $Testimonials = Testimonial::where('status', 1)->where('page_type','home')->get();
        // dd($Testimonials);
        $events=EventsPost::with('category')->where('category_id', 1)->where('status', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        // dd($events);
        return view('web.pages.index', compact('schools','Testimonials','events'));
    }
}
