<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Str;
use App\Models\School;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Program::with('school')->latest();

            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }

        return view('admin.Programs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $Schools = School::where('status', 1)->get();
        return view('admin.Programs.create', compact('Schools'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'School_id' => 'required|exists:schools,id',
            'name' => 'required|string|max:255|unique:programs,name',
            'degree_type' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'level' => 'nullable|string|max:255',
            'overview' => 'nullable|string',
            'featured_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'eligibility' => 'nullable|array',
            'curriculum_structure' => 'nullable|array',
            'highlights' => 'nullable|array',
            'total_seats' => 'nullable|integer',
            'fee_min' => 'nullable|numeric',
            'fee_max' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {

            $program = new Program();

            // ✅ Foreign Key
            $program->School_id = $request->School_id;

            $program->name = $request->name;

            // ✅ Generate Unique Slug
            $program->slug = generateSlug(Program::class, $request->name);

            $program->degree_type = $request->degree_type;
            $program->duration = $request->duration;
            $program->level = $request->level;
            $program->overview = $request->overview;

            $program->total_seats = $request->total_seats;
            $program->fee_min = $request->fee_min;
            $program->fee_max = $request->fee_max;

            // ✅ Default values
            $program->order = 0;
            $program->status  = 1;

            // ✅ Featured Image Upload
            if ($request->hasFile('featured_image')) {
                $file = $request->file('featured_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/programs'), $filename);
                $program->featured_image = 'uploads/programs/' . $filename;
            }

            // ✅ JSON Fields
            $program->eligibility = $request->eligibility
                ? json_encode($request->eligibility)
                : null;

            $program->curriculum_structure = $request->curriculum_structure
                ? json_encode($request->curriculum_structure)
                : null;

            $program->highlights = $request->highlights
                ? json_encode($request->highlights)
                : null;

            $program->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Program added successfully',
                'data' => $program
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
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($programID)
    {
        $program = Program::findOrFail($programID);
        $Schools = School::where('status', 1)->get();
        return view('admin.Programs.edit', compact('program', 'Schools'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find Program
        $program = Program::findOrFail($id);

        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'school_id' => 'required|exists:schools,id',
            'name' => 'required|string|max:255|unique:programs,name,' . $program->id,
            'degree_type' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'level' => 'nullable|string|max:255',
            'overview' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'eligibility' => 'nullable|array',
            'curriculum_structure' => 'nullable|array',
            'highlights' => 'nullable|array',
            'total_seats' => 'nullable|integer',
            'fee_min' => 'nullable|numeric',
            'fee_max' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {

            // ✅ Foreign Key
            // $program->school_id  = $request->School_id;
            $program->school_id  = $request->school_id;


            // ✅ Regenerate slug if name changed
            if ($program->name !== $request->name) {
                $program->slug = generateSlug(Program::class, $request->name);
            }

            $program->name = $request->name;
            $program->degree_type = $request->degree_type;
            $program->duration = $request->duration;
            $program->level = $request->level;
            $program->overview = $request->overview;

            $program->total_seats = $request->total_seats;
            $program->fee_min = $request->fee_min;
            $program->fee_max = $request->fee_max;

            // ✅ Update Image if uploaded
            if ($request->hasFile('featured_image')) {

                // Delete old image
                if ($program->featured_image && file_exists(public_path($program->featured_image))) {
                    unlink(public_path($program->featured_image));
                }

                $file = $request->file('featured_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/programs'), $filename);

                $program->featured_image = 'uploads/programs/' . $filename;
            }

            // ✅ JSON Fields
            $program->eligibility = $request->eligibility
                ? json_encode($request->eligibility)
                : null;

            $program->curriculum_structure = $request->curriculum_structure
                ? json_encode($request->curriculum_structure)
                : null;

            $program->highlights = $request->highlights
                ? json_encode($request->highlights)
                : null;

            $program->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Program updated successfully',
                'data' => $program
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
    public function destroy(Program $program)
    {
        //
    }
}
