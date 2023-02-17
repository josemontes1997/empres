@extends('layouts.app')


@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Registros</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        <div class="d-md-flex justify-content-md-end">
                            <form action="{{ route('empresas.index') }}" method="GET">
                            <div class="btn-group">
                        <input type="text" name="busqueda" class="form-control">
                        <input type="submit" value="Buscar" class="btn btn-warning">
</div>
</form>
</div>
<br>

                
            
                        @can('crear-empresa')
                        <a class="btn btn-warning" href="{{ route('empresas.create') }}">Nuevo</a>
                        @endcan
                        
                        <a href="{{ route('empresas.pdf') }}" class="btn btn-warning" data-placement="left">
                            {{__('PDF')}}
                        </a>

                        <a href="{{ route('empresas.grafica') }}" class="btn btn-warning" data-placement="left">
                            {{__('GRAFICA')}}
                        </a>
                       
                        <table class="table table-dark table-bordered table-hover table-sm mt-2">
                                <thead style="background-color:#000">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Usuario</th>
                                    <th style="color:#fff;">Tipo</th>                                    
                                    <th style="color:#fff;">Marca</th>
                                    <th style="color:#fff;">Modelo</th> 
                                    <th style="color:#fff;">Ticket</th>    
                                    <th style="color:#fff;">Serie</th>   
                                    <th style="color:#fff;">N_Producto</th>   
                                    <th style="color:#fff;">So</th>   
                                    <th style="color:#fff;">Procesador</th>   
                                    <th style="color:#fff;">HDD</th>   
                                    <th style="color:#fff;">SSD</th>   
                                    <th style="color:#fff;">Ram</th>   
                                    <th style="color:#fff;">Mantenimiento</th> 
                                    <th style="color:#fff;">Acciones</th>                                                                
                              </thead>
                              <tbody>

                            @foreach ($empresas as $empresa)
                            <tr>
                            
                                <td style="display: none;">{{ $empresa->id }}</td>                                
                                <td>{{ $empresa->usuario }}</td>
                                <td>{{ $empresa->tipo }}</td>
                                <td>{{ $empresa->marca }}</td>
                                <td>{{ $empresa->modelo }}</td>
                                <td>{{ $empresa->ticket }}</td>
                                <td>{{ $empresa->serie }}</td>
                                <td>{{ $empresa->n_producto }}</td>
                                <td>{{ $empresa->so }}</td>
                                <td>{{ $empresa->procesador }}</td>
                                <td>{{ $empresa->hdd }}</td>
                                <td>{{ $empresa->ssd }}</td>
                                <td>{{ $empresa->ram }}</td>
                                <td>{{ $empresa->mantenimiento }}</td>
                                <td>

                                    <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">                                        
                                        @can('editar-empresa')
                                        <a class="btn btn-info" href="{{ route('empresas.edit',$empresa->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-empresa')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            <td colspan="4"> {{$empresas->appends(['busqueda'=>$busqueda])}} </td>
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
