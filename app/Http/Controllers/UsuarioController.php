<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class UsuarioController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-usuario|crear-usuario|detalle-usuario|editar-usuario|borrar-usuario', ['only' => ['index']]);
        $this->middleware('permission:crear-usuario', ['only' => ['create', 'store']]);
        $this->middleware('permission:detalle-usuario', ['only' => ['show']]);
        $this->middleware('permission:editar-usuario', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-usuario', ['only' => ['destroy']]);
    }

    public function index()
    {
        $users = User::get();
        $visitas = DB::table('visitas')->where('ruta', '=', '/usuarios')->get();
        return view('admin.user.index', compact('users', 'visitas'));
    }

    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        $visitas = DB::table('visitas')->where('ruta', '=', '/usuarios/create')->get();
        return view('admin.user.create', compact('roles', 'visitas'));
    }

    public function store(StoreRequest $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
        ->with('success', 'Los datos del usuario se ah creado correctamente.')
        ->with('alert-type', 'alert-success');
    }

    public function show(User $user)
    {
        $id=$user->id;
        $visitas = DB::table('visitas')->where('ruta', '=', '/usuarios/'.$id)->get();
        return view('admin.user.show', compact('user', 'visitas'));
    }

    public function edit($id)
    {
        //$id=$id->id;
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();

        if ($user->roles) {
            $userRole = $user->roles->pluck('name', 'name')->all();
        } else {
            $userRole = [];
        }
        $visitas = DB::table('visitas')->where('ruta', '=', '/usuarios/'.$id.'/edit')->get();
        return view('admin.user.edit', compact('user', 'roles', 'userRole', 'visitas'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, ['password']);
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')
            ->where('model_id', $id)
            ->delete();

        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
        ->with('success', 'Los datos del usuario ha sido actualizado correctamente.')
        ->with('alert-type', 'alert-warning');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
        ->with('success', 'Los datos del usuario ha eliminado correctamente.')
        ->with('alert-type', 'alert-danger');
    }
}
