<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola soy tu reporte</title>

    <link href="{{ public_path('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    
    
</head>
<body>
    <h1>Lista de Empresas</h1>
    
    <table class="table table-striped table-bordered table-hover table-dark">
    <thead style="background-color:#FF0000">  
                                                                     
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
                                    
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
</body>
</html>