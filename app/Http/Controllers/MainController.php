<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Course;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Course Validation
            'course_title'   => 'required|string|max:255',
            'price'          => 'required|string|max:50',
            'video'          => 'nullable|string',
            'category'       => 'nullable|string',
            'image'          => 'nullable|string',
            'summary'        => 'nullable|string',

            // Module Validation
            'moduletitle'         => 'required|array',
            'moduletitle.*'       => 'required|string|max:255',



            'video_type'          => 'required|array',
            'video_type.*'        => 'required|string|in:mp4,wav,avi,mov,mkv',

            'video_url'           => 'required|array',
            'video_url.*'         => 'required|url',

            'video_length'        => 'required|array',
            'video_length.*'      => [
                'required',
                'regex:/^(?:[0-1]\d|2[0-3]):[0-5]\d:[0-5]\d$/'
            ],
        ]);

        // ✅ Store course data
        Course::create([
            'course_title' => $validated['course_title'],
            'price'        => $validated['price'],
            'video'        => $validated['video'] ?? null,
            'category'     => $validated['category'] ?? null,
            'image'        => $validated['image'] ?? null,
            'summary'      => $validated['summary'] ?? null,
        ]);

        // ✅ Store module data
        foreach ($validated['moduletitle'] as $index => $value) {
            Main::create([
                'moduletitle'   => $validated['moduletitle'][$index],
                'video_type'    => $validated['video_type'][$index],
                'video_url'     => $validated['video_url'][$index] ?? null,
                'video_length'  => $validated['video_length'][$index] ?? null,
            ]);
        }

        return back()->with('success', '✅ Course and Modules Saved Successfully!');
    }



    /**
     * Display the specified resource.
     */
    public function show(Main $main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Main $main)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Main $main)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Main $main)
    {
        //
    }
}
