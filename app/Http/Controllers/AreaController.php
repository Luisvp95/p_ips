<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AreaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-area|:detalle-area|crear-area|editar-area|borrar-area', ['only' => ['index']]);
        $this->middleware('permission:detalle-area', ['only' => ['show']]);
        $this->middleware('permission:crear-area', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-area', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-area', ['only' => ['destroy']]);
    }
    public function index()
    {
        $areas = Area::paginate();

        return view('area.index', compact('areas'))
            ->with('i', (request()->input('page', 1) - 1) * $areas->perPage());
    }
    public function create()
    {
        $area = new Area();
        return view('area.create', compact('area'));
    }

    public function store(Request $request)
    {
        request()->validate(Area::$rules);

        $area = Area::create($request->all());

        return redirect()->route('areas.index')
            ->with('success', 'Area created successfully.');
    }

    public function show($id)
    {
        $area = Area::find($id);

        return view('area.show', compact('area'));
    }
    public function edit($id)
    {
        $area = Area::find($id);

        return view('area.edit', compact('area'));
    }
    public function update(Request $request, Area $area)
    {
        request()->validate(Area::$rules);

        $area->update($request->all());

        return redirect()->route('areas.index')
            ->with('success', 'Area updated successfully');
    }

    public function destroy($id)
    {
        $area = Area::find($id)->delete();

        return redirect()->route('areas.index')
            ->with('success', 'Area deleted successfully');
    }
}
