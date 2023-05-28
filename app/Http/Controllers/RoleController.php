<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Role\StoreRequest;
use App\Http\Requests\Role\UpdateRequest;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-rol|detalle-rol|crear-rol|editar-rol|borrar-rol', ['only' => ['index']]);
        $this->middleware('permission:crear-rol', ['only' => ['create', 'store']]);
        $this->middleware('permission:detalle-rol', ['only' => ['show']]);
        $this->middleware('permission:editar-rol', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-rol', ['only' => ['destroy']]);
    }

    public function index()
    {
        $roles = Role::get();
        // $visitas = DB::table('visitas')
        //     ->where('ruta', '=', '/roles')
        //     ->get();
        return view('role.index', compact('roles'));
    }

    /*public function create()
    {
        //$permission = Permission::get();

        //$permission = Permission::pluck('name', 'id');
        $visitas = DB::table('visitas')->where('ruta', '=', '/roles/create')->get();
        $userPermission = Permission::where('name', 'LIKE', '%ver-usuario%')
            ->orWhere('name', 'LIKE', '%crear-usuario%')
            ->orWhere('name', 'LIKE', '%editar-usuario%')
            ->orWhere('name', 'LIKE', '%borrar-usuario%')
            ->orWhere('name', 'LIKE', '%detalle-usuario%')
            ->pluck('name', 'id');

        $rolPermission = Permission::where('name', 'LIKE', '%ver-rol%')
            ->orWhere('name', 'LIKE', '%crear-rol%')
            ->orWhere('name', 'LIKE', '%editar-rol%')
            ->orWhere('name', 'LIKE', '%borrar-rol%')
            ->orWhere('name', 'LIKE', '%detalle-rol%')
            ->pluck('name', 'id');

        $categoryPermission = Permission::where('name', 'LIKE', '%ver-categoria%')
            ->orWhere('name', 'LIKE', '%crear-categoria%')
            ->orWhere('name', 'LIKE', '%editar-categoria%')
            ->orWhere('name', 'LIKE', '%borrar-categoria%')
            ->orWhere('name', 'LIKE', '%detalle-categoria%')
            ->pluck('name', 'id');

        $personPermission = Permission::where('name', 'LIKE', '%ver-persona%')
            ->orWhere('name', 'LIKE', '%crear-persona%')
            ->orWhere('name', 'LIKE', '%editar-persona%')
            ->orWhere('name', 'LIKE', '%borrar-persona%')
            ->orWhere('name', 'LIKE', '%detalle-persona%')
            ->pluck('name', 'id');

        $cursePermission = Permission::where('name', 'LIKE', '%ver-curso%')
            ->orWhere('name', 'LIKE', '%crear-curso%')
            ->orWhere('name', 'LIKE', '%editar-curso%')
            ->orWhere('name', 'LIKE', '%borrar-curso%')
            ->orWhere('name', 'LIKE', '%detalle-curso%')
            ->orWhere('name', 'LIKE', '%estado-curso%')
            ->pluck('name', 'id');

        $autorPermission = Permission::where('name', 'LIKE', '%ver-autor%')
            ->orWhere('name', 'LIKE', '%crear-autor%')
            ->orWhere('name', 'LIKE', '%editar-autor%')
            ->orWhere('name', 'LIKE', '%borrar-autor%')
            ->orWhere('name', 'LIKE', '%detalle-autor%')
            ->pluck('name', 'id');
        $libroPermission = Permission::where('name', 'LIKE', '%ver-libro%')
            ->orWhere('name', 'LIKE', '%crear-libro%')
            ->orWhere('name', 'LIKE', '%editar-libro%')
            ->orWhere('name', 'LIKE', '%borrar-libro%')
            ->orWhere('name', 'LIKE', '%detalle-libro%')
            ->pluck('name', 'id');

        $prestamoPermission = Permission::where('name', 'LIKE', '%ver-prestamo%')
            ->orWhere('name', 'LIKE', '%crear-prestamo%')
            ->orWhere('name', 'LIKE', '%detalle-prestamo%')
            ->orWhere('name', 'LIKE', '%pdf-prestamo%')
            ->orWhere('name', 'LIKE', '%estado-prestamo%')
            ->orWhere('name', 'LIKE', '%historial-prestamo%')
            ->pluck('name', 'id');

        $salePermission = Permission::where('name', 'LIKE', '%ver-venta%')
            ->orWhere('name', 'LIKE', '%crear-venta%')
            ->orWhere('name', 'LIKE', '%detalle-venta%')
            ->orWhere('name', 'LIKE', '%pdf-venta%')
            ->orWhere('name', 'LIKE', '%imprimir-venta%')
            ->orWhere('name', 'LIKE', '%estado-venta%')
            ->pluck('name', 'id');

        $reportPermission = Permission::where('name', 'LIKE', '%ver-reporte-dia%')
            ->orWhere('name', 'LIKE', '%ver-reporte-por-fecha%')
            ->orWhere('name', 'LIKE', '%consultar-fecha%')
            ->orWhere('name', 'LIKE', '%pdf-reporte-dia%')
            ->orWhere('name', 'LIKE', '%detalle-reporte-dia%')
            ->orWhere('name', 'LIKE', '%detalle-reporte-por-fecha%')
            ->orWhere('name', 'LIKE', '%pdf-reporte-dia%')
            ->orWhere('name', 'LIKE', '%imprimir-reporte-dia%')
            ->orWhere('name', 'LIKE', '%imprimir-reporte-por-fecha%')
            ->pluck('name', 'id');

        $contenidoPermission = Permission::where('name', 'LIKE', '%ver-contenido%')
            ->orWhere('name', 'LIKE', '%editar-contenido%')
            ->orWhere('name', 'LIKE', '%detalle-contenido%')
            ->orWhere('name', 'LIKE', '%crear-contenido%')
            ->orWhere('name', 'LIKE', '%borrar-contenido%')
            ->pluck('name', 'id');

        $horarioPermission = Permission::where('name', 'LIKE', '%ver-horario%')
            ->orWhere('name', 'LIKE', '%editar-horario%')
            ->orWhere('name', 'LIKE', '%detalle-horario%')
            ->orWhere('name', 'LIKE', '%crear-horario%')
            ->orWhere('name', 'LIKE', '%borrar-horario%')
            ->pluck('name', 'id');

        return view('admin.role.create', compact('userPermission', 'rolPermission', 'categoryPermission', 'personPermission', 'cursePermission', 'autorPermission', 'libroPermission', 'prestamoPermission', 'salePermission', 'reportPermission', 'contenidoPermission', 'horarioPermission', 'visitas'));
    }*/

    public function create()
    {
        // $visitas = DB::table('visitas')
        //     ->where('ruta', '=', '/roles/create')
        //     ->get();
        $userPermission = $this->getPermissionsByType('usuario');
        $rolPermission = $this->getPermissionsByType('rol');
        $areaPermission = $this->getPermissionsByType('area');
        $ipPermission = $this->getPermissionsByType('ip');
        //dd($reportPermission);

        return view('role.create', compact('userPermission', 'rolPermission', 'areaPermission','ipPermission'));
    }

    private function getPermissionsByType($type)
    {
        $permissions = Permission::whereIn('name', ["ver-{$type}", "crear-{$type}", "editar-{$type}", "borrar-{$type}", "detalle-{$type}", "estado-{$type}", "pdf-{$type}", "imprimir-{$type}", "historial-{$type}", "consultar-{$type}", "detalle-reporte-{$type}", "ver-reporte-{$type}", "pdf-reporte-{$type}", "imprimir-reporte-{$type}"])->pluck('name', 'id');

        return $permissions;
        //dd($permissions);
    }

    public function store(StoreRequest $request)
    {
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        return redirect()
            ->route('roles.index')
            ->with('success', 'Los datos del rol se ah creado correctamente.')
            ->with('alert-type', 'alert-success');
    }

    public function show(Role $role)
    {
        $id = $role->id;
        // $visitas = DB::table('visitas')
        //     ->where('ruta', '=', '/roles/' . $id)
        //     ->get();
        return view('role.show', compact('role'));
    }
    /*public function edit($id)
    {
        $role = Role::find($id);
        //$permission = Permission::get();
        $visitas = DB::table('visitas')
            ->where('ruta', '=', '/roles/' . $id . '/edit')
            ->get();
        $userPermission = Permission::where('name', 'LIKE', '%ver-usuario%')
            ->orWhere('name', 'LIKE', '%crear-usuario%')
            ->orWhere('name', 'LIKE', '%editar-usuario%')
            ->orWhere('name', 'LIKE', '%borrar-usuario%')
            ->orWhere('name', 'LIKE', '%detalle-usuario%')
            ->pluck('name', 'id');

        $rolPermission = Permission::where('name', 'LIKE', '%ver-rol%')
            ->orWhere('name', 'LIKE', '%crear-rol%')
            ->orWhere('name', 'LIKE', '%editar-rol%')
            ->orWhere('name', 'LIKE', '%borrar-rol%')
            ->orWhere('name', 'LIKE', '%detalle-rol%')
            ->pluck('name', 'id');

        $categoryPermission = Permission::where('name', 'LIKE', '%ver-categoria%')
            ->orWhere('name', 'LIKE', '%crear-categoria%')
            ->orWhere('name', 'LIKE', '%editar-categoria%')
            ->orWhere('name', 'LIKE', '%borrar-categoria%')
            ->orWhere('name', 'LIKE', '%detalle-categoria%')
            ->pluck('name', 'id');

        $personPermission = Permission::where('name', 'LIKE', '%ver-persona%')
            ->orWhere('name', 'LIKE', '%crear-persona%')
            ->orWhere('name', 'LIKE', '%editar-persona%')
            ->orWhere('name', 'LIKE', '%borrar-persona%')
            ->orWhere('name', 'LIKE', '%detalle-persona%')
            ->pluck('name', 'id');

        $cursePermission = Permission::where('name', 'LIKE', '%ver-curso%')
            ->orWhere('name', 'LIKE', '%crear-curso%')
            ->orWhere('name', 'LIKE', '%editar-curso%')
            ->orWhere('name', 'LIKE', '%borrar-curso%')
            ->orWhere('name', 'LIKE', '%detalle-curso%')
            ->orWhere('name', 'LIKE', '%estado-curso%')
            ->pluck('name', 'id');

        $autorPermission = Permission::where('name', 'LIKE', '%ver-autor%')
            ->orWhere('name', 'LIKE', '%crear-autor%')
            ->orWhere('name', 'LIKE', '%editar-autor%')
            ->orWhere('name', 'LIKE', '%borrar-autor%')
            ->orWhere('name', 'LIKE', '%detalle-autor%')
            ->pluck('name', 'id');

        $libroPermission = Permission::where('name', 'LIKE', '%ver-libro%')
            ->orWhere('name', 'LIKE', '%crear-libro%')
            ->orWhere('name', 'LIKE', '%editar-libro%')
            ->orWhere('name', 'LIKE', '%borrar-libro%')
            ->orWhere('name', 'LIKE', '%detalle-libro%')
            ->pluck('name', 'id');

        $prestamoPermission = Permission::where('name', 'LIKE', '%ver-prestamo%')
            ->orWhere('name', 'LIKE', '%crear-prestamo%')
            ->orWhere('name', 'LIKE', '%detalle-prestamo%')
            ->orWhere('name', 'LIKE', '%pdf-prestamo%')
            ->orWhere('name', 'LIKE', '%estado-prestamo%')
            ->orWhere('name', 'LIKE', '%historial-prestamo%')
            ->pluck('name', 'id');

        $salePermission = Permission::where('name', 'LIKE', '%ver-venta%')
            ->orWhere('name', 'LIKE', '%crear-venta%')
            ->orWhere('name', 'LIKE', '%detalle-venta%')
            ->orWhere('name', 'LIKE', '%pdf-venta%')
            ->orWhere('name', 'LIKE', '%imprimir-venta%')
            ->orWhere('name', 'LIKE', '%estado-venta%')
            ->pluck('name', 'id');

        $reportPermission = Permission::where('name', 'LIKE', '%ver-reporte-dia%')
            ->orWhere('name', 'LIKE', '%ver-reporte-por-fecha%')
            ->orWhere('name', 'LIKE', '%consultar-fecha%')
            ->orWhere('name', 'LIKE', '%pdf-reporte-dia%')
            ->orWhere('name', 'LIKE', '%detalle-reporte-dia%')
            ->orWhere('name', 'LIKE', '%detalle-reporte-por-fecha%')
            ->orWhere('name', 'LIKE', '%pdf-reporte-dia%')
            ->orWhere('name', 'LIKE', '%imprimir-reporte-dia%')
            ->orWhere('name', 'LIKE', '%imprimir-reporte-por-fecha%')
            ->pluck('name', 'id');

        $contenidoPermission = Permission::where('name', 'LIKE', '%ver-contenido%')
            ->orWhere('name', 'LIKE', '%editar-contenido%')
            ->orWhere('name', 'LIKE', '%detalle-contenido%')
            ->orWhere('name', 'LIKE', '%crear-contenido%')
            ->orWhere('name', 'LIKE', '%borrar-contenido%')
            ->pluck('name', 'id');

        $horarioPermission = Permission::where('name', 'LIKE', '%ver-horario%')
            ->orWhere('name', 'LIKE', '%editar-horario%')
            ->orWhere('name', 'LIKE', '%detalle-horario%')
            ->orWhere('name', 'LIKE', '%crear-horario%')
            ->orWhere('name', 'LIKE', '%borrar-horario%')
            ->pluck('name', 'id');

        $rolePermissions = DB::table('role_has_permissions')
            ->where('role_has_permissions.role_id', $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        return view('admin.role.edit', compact('role', 'rolePermissions', 'userPermission', 'rolPermission', 'categoryPermission', 'personPermission', 'cursePermission', 'autorPermission', 'libroPermission', 'prestamoPermission', 'salePermission', 'reportPermission', 'contenidoPermission', 'horarioPermission', 'visitas'));
    }
*/

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        // $visitas = DB::table('visitas')
        //     ->where('ruta', '=', '/roles/create')
        //     ->get();
        $userPermission = $this->getPermissionsByType('usuario');
        $rolPermission = $this->getPermissionsByType('rol');
        $categoryPermission = $this->getPermissionsByType('categoria');
        $personPermission = $this->getPermissionsByType('persona');
        $cursePermission = $this->getPermissionsByType('curso');
        $autorPermission = $this->getPermissionsByType('autor');
        $libroPermission = $this->getPermissionsByType('libro');
        $prestamoPermission = $this->getPermissionsByType('prestamo');
        $salePermission = $this->getPermissionsByType('venta');
        $reportPermission = $this->getPermissionsByType('dia');
        $report1Permission = $this->getPermissionsByType('fecha');
        $contenidoPermission = $this->getPermissionsByType('contenido');
        $horarioPermission = $this->getPermissionsByType('horario');

        // Obtener los permisos del rol que se va a editar
        $assignedPermissions = $role->permissions->pluck('id')->toArray();

        return view('role.edit', compact('role', 'userPermission', 'rolPermission', 'categoryPermission', 'personPermission', 'cursePermission', 'autorPermission', 'libroPermission', 'prestamoPermission', 'salePermission', 'reportPermission', 'report1Permission', 'contenidoPermission', 'horarioPermission', 'assignedPermissions', 'visitas'));
    }

    public function update(UpdateRequest $request, Role $role)
    {
        $role->update($request->all());
        $role->syncPermissions($request->input('permission'));
        return redirect()
            ->route('roles.index')
            ->with('success', 'Los datos del rol ha sido actualizado correctamente.')
            ->with('alert-type', 'alert-warning');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()
            ->route('roles.index')
            ->with('success', 'Los datos del rol ha eliminado correctamente.')
            ->with('alert-type', 'alert-danger');
    }
}
