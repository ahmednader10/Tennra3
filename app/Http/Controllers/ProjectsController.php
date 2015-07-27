<?php

namespace App\Http\Controllers;


use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('indexProject', compact('projects')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('createProjectForm');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required' , 'description' => 'required' , 'goal' => 'required']);
       // $projects = Request::all();
        Project::create($request->all());
       
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        if(is_null($project)){
            abort(404);
        }
        return view('showProject',compact('project'));
    }

    public function like($id)
    {
        $project = Project::find($id);
        if(is_null($project)){
            abort(404);
        }

        $project->likes+= (int) 1;
        $project->save();
        return view('showProject',compact('project'));
    }

    public function pledge($id, $pledgeAmount)
    {
        $project = Project::find($id);
        if(is_null($project)){
            abort(404);
        }

        $project->pledgeAmount+=(int)$pledgeAmount;
        $project->goal-=(int)$pledgeAmount;
        $project->save();
        return view('/projects');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
