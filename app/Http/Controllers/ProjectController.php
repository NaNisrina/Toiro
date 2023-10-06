<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $project_data = Project::all();
        // return view('list.project', compact('project_data'));
        return view('list.project');
    }
    public function data(Request $request)
    {
        if ($request->key){
            $project = Project::where('title', 'like', '%'.$request->key.'%')
                ->orWhere('description', 'like', '%'.$request->key.'%')->get();
            return response()->json($project);
        } else {
            $project = Project::get();
            return response()->json($project);
        }
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
        $project = new Project();

        $project->title         = $request->title;
        $project->description   = $request->description;
        $project->save();

        return response()->json([
            'status' => 200
        ]);
    }

    public function updateStatus(Request $request, $id_project)
    {
        $project = Project::findOrFail($id_project);
        $project->status = $project->status == 1 ? 0 : 1;
        $project->save();

        return response()->json([
            'status' => 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id_project)
    {
        $project = Project::with('DetailProject')->where('id_project', $id_project)->first();
        return response()->json($project);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_project)
    {
        $project = Project::findOrFail($id_project);

        $project->title = $request->title;
        $project->description = $request->description;
        $project->save();

        return response()->json([
            'status' => 200
        ]);

        // $project = Project::findOrFail($id_project);

        // $project->title = $request->title;
        // $project->description = $request->description;
        // $project->save();

        // return response()->json([
        //     "status" => 200
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_project)
    {
        $items = Project::findOrFail($id_project);
        $items->delete();

        if($items) {
            return response()->json([
                "status" => 200
            ]);
        } else {
            return response()->json([
                "status" => 500
            ]);
        }
    }
}
