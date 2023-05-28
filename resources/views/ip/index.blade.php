@extends('adminlte::page')

@section('title', 'Ips')

@section('content_header')
    <h1>Lista de roles</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Ip') }}
                        </span>

                         <div class="float-right">
                            <a href="{{ route('ips.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    
                                    <th>S.O</th>
                                    <th>Area</th>
                                    <th>Ip</th>
                                    <th>Puerta de enlace</th>
                                    <th>Mascara</th>
                                    <th>Estado</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ips as $ip)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $ip->description }}</td>
                                        <td>{{ $ip->area->name }}</td>
                                        <td>{{ $ip->ip }}</td>
                                        <td>{{ $ip->area->gateway }}</td>
                                        <td>{{ $ip->area->mask }}</td>
                                        <td>{{ $ip->status }}</td>

                                        <td>
                                            <form action="{{ route('ips.destroy',$ip->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('ips.show',$ip->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Detalles') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('ips.edit',$ip->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
            {!! $ips->links() !!}
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