<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SQL
        // $projects = DB::select('select * from app.projects');

        // QUERY BUILDER
        // $projects = DB::table('app.projects')->get();

        // ELOQUENT
        $projects = Project::get();
        return response()->json(
        [
            'data' => $projects,
            'msg' => [
                'summary' => 'Consulta correcta',
                'detail' => 'La consulta del proyecto está correcta',
                'code' => '201'
            ]
        ], 201
    );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //SQL
        /*
        $project = DB::insert('insert into app.projects (code,date,description,approved,title,created_at,updated_at)
        values (?,?,?,?,?,?,?)', [
            $request->code,
            $request->date,
            $request->description,
            $request->approved,
            $request->title,
            $request->created_at,
            $request->updated_at,
        ]);
        */
        // QUERY BUILDER
        /*
        $project = DB::table('app.projects)->insert([
            'code'=>$request->code,
            'date'=>$request->date,
            'description'=>$request->description,
            'approved'=>$request->approved,
            'title'=>$request->title,
            'created_at'=>$request->created_at,
            'update_at'=>$request->update_at,
        ]);
        */

        //ELOQUENT
        /*
        $project = Project::create([
              'code'=>$request->code,
               'date'=>$request->date,
               'description'=>$request->description,
               'approved'=>$request->approved,
               'title'=>$request->title,
        ]);
        */

        $project = new Project();
        $project->code = $request->code;
        $project->date = $request->date;
        $project->description = $request->description;
        $project->approved = $request->approved;
        $project->title = $request->title;
        $project->save();

        
        return response() ->json(
        [
            'data' => $projects,
            'msg' => [
                'summary' => 'Creación correcta',
                'detail' => 'El dato ha sido creado',
                'code' => '200'
            ]
        ],200
    );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($project)
    {
        // SQL
        //$projects = DB::select('select * from app.projects where id = ?', [$project]);

        // QUERY BUILDER
        //$project = DB::table('app.projects')->find($project);

        //ELOQUENT
        $project = Project::find($project);
        return response()->json(
        [
            'data' => $projects,
            'msg' => [
                'summary' => 'Consulta correcta',
                'detail' => 'La consulta del vehículo y policia es correcta',
                'code' => '200'
            ]
        ], 200
    );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project)
    {
        $project = Project::find($project);
        $project->code = $request->code;
        $project->date = $request->date;
        $project->description = $request->description;
        $project->approved = $request->approved;
        $project->title = $request->title;
        $project->save();

        //$vehicles = ['carro', 'moto', 'bus']; 
        return response() ->json(
        [
            'data' => null,
            'msg' => [
                'summary' => 'Actualización correcta',
                'detail' => 'Los datos se han actualizado',
                'code' => '201'
            ]
        ],201 
     );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($project)
    {
        $project = Project::find($project);
        $project->delete();
        return response()->json(
        [
            'data' => $project,
            'msg' => [
                'summary' => 'Eliminado correctamente',
                'detail' => 'EL dato se eliminó correctamente',
                'code' => '201'
            ]
        ], 201
    );
    }

    public function updateState()
    {
        $project = 'project';
        return response()->json(
            [
                'data' => $project,
                'msg' => [
                    'summary' => 'actualizacion correcta',
                    'detail' => 'el estado del proyecto se actualizo ',
                    'code' => '201'
                ]

            ],201
        );
    }
}

