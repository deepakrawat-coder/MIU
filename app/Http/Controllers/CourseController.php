<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Str;
use App\Models\Program;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {

            $courses = Course::with('program')->latest()->get();

            return DataTables::of($courses)
                ->addIndexColumn()
                ->addColumn('action', fn($row) => '')
                ->make(true);
        }
        return view('admin.Courses.index');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = Program::where('status', 1)->get();
        return view('admin.Courses.create', compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'program_id' => 'required|exists:programs,id',
            'code' => 'required|string|max:100|unique:courses,code',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:courses,slug',
            'description' => 'nullable|string',
            'semester' => 'nullable|integer|min:1',
            'year' => 'nullable|integer|min:1',
            'credits' => 'nullable|integer|min:0',
            'type' => 'required|in:core,elective,laboratory,project,internship',
            'prerequisites' => 'nullable|array',
            'syllabus' => 'nullable|array',
            'learning_outcomes' => 'nullable|array',
            'resources' => 'nullable|array',
            'order' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {

            $course = new Course();

            // ✅ Foreign Key
            $course->program_id = $request->program_id;

            $course->code = $request->code;
            $course->name = $request->name;

            // ✅ Generate Slug (if not provided)
            $course->slug = $request->slug
                ? Str::slug($request->slug)
                : generateSlug(Course::class, $request->name);

            $course->description = $request->description;
            $course->semester = $request->semester;
            $course->year = $request->year;
            $course->credits = $request->credits;
            $course->type = $request->type;

            // ✅ Default values
            $course->order = $request->order ?? 0;

            // ✅ JSON Fields
            $course->prerequisites = $request->prerequisites
                ? json_encode($request->prerequisites)
                : null;

            $course->syllabus = $request->syllabus
                ? json_encode($request->syllabus)
                : null;

            $course->learning_outcomes = $request->learning_outcomes
                ? json_encode($request->learning_outcomes)
                : null;

            $course->resources = $request->resources
                ? json_encode($request->resources)
                : null;

            $course->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Course added successfully',
                'data' => $course
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => 0,
                'message' => 'Something went wrong: ' . $e->getMessage()
            ], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($courseID)
    {
        $programs = Program::where('status', 1)->get();
        $course = Course::findOrFail($courseID);
        return view('admin.Courses.edit', compact('course', 'programs'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $courseID)
{
    // ✅ Find Course
    $course = Course::findOrFail($courseID);

    // ✅ Validation
    $validator = Validator::make($request->all(), [
        'program_id' => 'required|exists:programs,id',
        'code' => 'required|string|max:100|unique:courses,code,' . $course->id,
        'name' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255|unique:courses,slug,' . $course->id,
        'description' => 'nullable|string',
        'semester' => 'nullable|integer|min:1',
        'year' => 'nullable|integer|min:1',
        'credits' => 'nullable|integer|min:0',
        'type' => 'required|in:core,elective,laboratory,project,internship',
        'prerequisites' => 'nullable|array',
        'syllabus' => 'nullable|array',
        'learning_outcomes' => 'nullable|array',
        'resources' => 'nullable|array',
        'order' => 'nullable|integer',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 0,
            'errors' => $validator->errors()
        ], 422);
    }

    try {

        // ✅ Update Fields
        $course->program_id = $request->program_id;
        $course->code = $request->code;
        $course->name = $request->name;

        // ✅ Slug Handling
        $course->slug = $request->slug
            ? Str::slug($request->slug)
            : generateSlug(Course::class, $request->name, $course->id);

        $course->description = $request->description;
        $course->semester = $request->semester;
        $course->year = $request->year;
        $course->credits = $request->credits;
        $course->type = $request->type;
        $course->order = $request->order ?? 0;

        // ✅ JSON Fields
        $course->prerequisites = $request->prerequisites
            ? json_encode($request->prerequisites)
            : null;

        $course->syllabus = $request->syllabus
            ? json_encode($request->syllabus)
            : null;

        $course->learning_outcomes = $request->learning_outcomes
            ? json_encode($request->learning_outcomes)
            : null;

        $course->resources = $request->resources
            ? json_encode($request->resources)
            : null;

        $course->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Course updated successfully',
            'data' => $course
        ]);

    } catch (Exception $e) {

        return response()->json([
            'status' => 0,
            'message' => 'Something went wrong: ' . $e->getMessage()
        ], 500);
    }
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
