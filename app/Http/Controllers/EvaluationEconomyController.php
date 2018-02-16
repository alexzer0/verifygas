<?php

namespace App\Http\Controllers;

use App\Evaluation_economy;
use Illuminate\Http\Request;

class EvaluationEconomyController extends Controller
{
    public function upload($id, Request $request)
    {
        $file = $request->file('file');
        $path = public_path() . '/images/projects';
        $fileName = uniqid() . $file->getClientOriginalName();

        $file->move($path, $fileName);
    
        $projectImage = new ProjectImage();
        $projectImage->project_id = $id;
        $projectImage->user_id = auth()->user()->id;
        $projectImage->file_name = $fileName;
        $projectImage->save();

        return $projectImage;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evaluation_economies.index',['evaluation_economies'=>Evaluation_economy::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluation_economies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $evaluation_economy=$this->validate(request(),[
            'foto_expediente_economico'=>'required'
        ]);*/
       
        //Evaluation_economy::create($evaluation_economy);
        $files = $request->file('images');
        $destinationPath = 'uploads';
        foreach($files as $file) {
            $filename = $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
        }

        return redirect()->to('evaluation_economies.index')->with('success', 'New support ticket has been created! Wait sometime to get resolved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluation_economy  $evaluation_economy
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation_economy $evaluation_economy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluation_economy  $evaluation_economy
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluation_economy $evaluation_economy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluation_economy  $evaluation_economy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluation_economy $evaluation_economy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluation_economy  $evaluation_economy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation_economy $evaluation_economy)
    {
        //
    }
}
