@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Empresa</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                            
                   
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif


                    <form action="{{ route('empresas.update',$empresa->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="marca">Usuario</label>
                                   <input type="text" name="usuario" class="form-control" value="{{ $empresa->usuario }}">
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="procesador">Tipo</label>
                                   <input type="text" name="tipo" class="form-control" value="{{ $empresa->tipo }}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="ram">Marca</label>
                                   <input type="text" name="marca" class="form-control" value="{{ $empresa->marca }}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="disco">Modelo</label>
                                   <input type="text" name="modelo" class="form-control" value="{{ $empresa->modelo }}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="observaciones">Ticket</label>
                                   <input type="text" name="ticket" class="form-control" value="{{ $empresa->ticket }}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">Serie</label>
                                   <input type="text" name="serie" class="form-control" value="{{ $empresa->serie }}">
                                </div>
                            </div>
                           
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">N_Poducto</label>
                                   <input type="text" name="n_producto" class="form-control" value="{{ $empresa->n_producto }}">
                                </div>
                            </div>
                           
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">So</label>
                                   <input type="text" name="so" class="form-control" value="{{ $empresa->so }}">
                                </div>
                            </div>
                           
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">Procesador</label>
                                   <input type="text" name="procesador" class="form-control" value="{{ $empresa->procesador }}">
                                </div>
                            </div>
                           
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">HDD</label>
                                   <input type="text" name="hdd" class="form-control" value="{{ $empresa->hdd }}">
                                </div>
                            </div>
                           
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">SSD</label>
                                   <input type="text" name="ssd" class="form-control" value="{{ $empresa->ssd }}">
                                </div>
                            </div>
                           
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">Ram</label>
                                   <input type="text" name="ram" class="form-control" value="{{ $empresa->ram }}">
                                </div>
                            </div>
                           
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">Mantenimiento</label>
                                   <input type="text" name="mantenimiento" class="form-control" value="{{ $empresa->mantenimiento }}">
                                </div>
                            </div>
                                
                                </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>                            
                        </div>
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection