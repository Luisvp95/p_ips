<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permisos = [

        'ver-usuario',
        'crear-usuario',
        'editar-usuario',
        'borrar-usuario',
        'detalle-usuario',

        'ver-rol',
        'crear-rol',
        'editar-rol',
        'borrar-rol',
        'detalle-rol',

        'ver-area',
        'crear-area',
        'editar-area',
        'borrar-area',
        'detalle-area',

        'ver-ip',
        'crear-ip',
        'editar-ip',
        'borrar-ip',
        'detalle-ip',
        'estado-ip',

        
        // 'ver-venta',
        // 'crear-venta',
        // 'pdf-venta',
        // 'imprimir-venta',
        // 'detalle-venta',
        // 'estado-venta',

        // 'ver-categoria',
        // 'crear-categoria',
        // 'editar-categoria',
        // 'borrar-categoria',
        // 'detalle-categoria',

        // 'ver-curso',
        // 'crear-curso',
        // 'editar-curso',
        // 'borrar-curso',
        // 'detalle-curso',
        // 'estado-curso',
        
        // 'ver-contenido',
        // 'crear-contenido',
        // 'editar-contenido',
        // 'borrar-contenido',
        // 'detalle-contenido',

        // 'ver-horario',
        // 'crear-horario',
        // 'editar-horario',
        // 'borrar-horario',
        // 'detalle-horario',

        // 'ver-persona',
        // 'crear-persona',
        // 'editar-persona',
        // 'borrar-persona',
        // 'detalle-persona',

        // 'ver-autor',
        // 'crear-autor',
        // 'editar-autor',
        // 'borrar-autor',
        // 'detalle-autor',

        // 'ver-libro',
        // 'crear-libro',
        // 'editar-libro',
        // 'borrar-libro',
        // 'detalle-libro',

        // 'ver-prestamo',
        // 'crear-prestamo',
        // 'pdf-prestamo',
        // 'imprimir-prestamo',
        // 'detalle-prestamo',
        // 'estado-prestamo',
        // 'historial-prestamo',

        // 'ver-reporte-dia',
        // 'pdf-reporte-dia',
        // 'imprimir-reporte-dia',
        // 'detalle-reporte-dia',
        // 'ver-reporte-por-fecha',
        // 'pdf-reporte-por-fecha',
        // 'imprimir-reporte-por-fecha',
        // 'detalle-reporte-por-fecha',
        // 'consultar-fecha',

       ];
       foreach($permisos as $permiso){
        Permission::create(['name'=>$permiso]);
       }
    }
}
