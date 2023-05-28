
@extends('adminlte::page')

@section('title', 'Areas')

@section('content_header')
    <h1>Areas</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Areas') }}
                        </span>

                         <div class="float-right">
                            <a href="{{ route('areas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                              {{ __('Nuevo') }}
                            </a>
                          </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="order-listing" class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Nombre</th>
                                    <th>Segmento</th>
                                    <th>Puerta de enlace</th>
                                    <th>Mascara</th>
                                    <th>Rango de Ip</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($areas as $area)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $area->name }}</td>
                                        <td>{{ $area->segment }}</td>
                                        <td>{{ $area->gateway }}</td>
                                        <td>{{ $area->mask }}</td>
                                        <td>{{ $area->range }}</td>

                                        <td>
                                            <form action="{{ route('areas.destroy',$area->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('areas.show',$area->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Detalles') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('areas.edit',$area->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $areas->links() !!}
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    {!! Html::style('melody/vendors/css/vendor.bundle.addons.css') !!}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    {!! Html::script('melody/vendors/js/vendor.bundle.addons.js') !!}
    {!! Html::script('js/data-table.js') !!}
@stop