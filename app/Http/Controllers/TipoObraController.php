<?php

namespace App\Http\Controllers;
use App\TipoObra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Response;

class TipoObraController extends Controller
{
    protected $guard_name = 'admin';

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permission:list.propiedades')->only('index');
        $this->middleware('permission:create.propiedades')->only(['create','store']);
        $this->middleware('permission:show.propiedades')->only('show');
        $this->middleware('permission:update.propiedades')->only(['edit','update']);
        $this->middleware('permission:delete.propiedades')->only('delete');
    }
    public function index(Request $request)
    {
        if($request->ajax()){
            return  DataTables::eloquent(TipoObra::query())
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.roles');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.roles');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }

        return view('crm.tipo_obras.list');
    }

    public function create() {
        return view('crm.tipo_obras.create');
    }

    public function store(Request $request)
    {
        $tipo = TipoObra::create($request->all());
        return redirect()->action('TipoObraController@index');
    }

    public function edit($id)
    {
       $tipo = TipoObra::findOrFail($id);
       return view('crm.tipo_obras.edit',[
        'tipo' => $tipo
       ]);
    }

    public function update(Request $request, $id)
    {
        $tipo = TipoObra::findOrFail($id);
        $tipo->update($request->all());
        return redirect()->action('TipoObraController@index');
    }
}
