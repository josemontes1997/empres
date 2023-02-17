<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class EmpresaController extends Controller
{



    public function grafica()
    {
        return view('empresas.grafica');
    }
    function __construct()
    {
        $this->middleware('permission:ver-empresa|crear-empresa|editar-empresa|borrar-empresa')->only('index');
        $this->middleware('permission:crear-empresa', ['only'=>['create', 'store']]);
        $this->middleware('permission:editar-empresa', ['only'=>['edit', 'update']]);
        $this->middleware('permission:borrar-empresa', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        //Con paginación
        $empresas = Empresa::where('usuario','LIKE','%'.$busqueda.'%')
        ->orwhere('tipo','LIKE','%'.$busqueda.'%')
        ->orwhere('marca','LIKE','%'.$busqueda.'%')
        ->orwhere('modelo','LIKE','%'.$busqueda.'%')
        ->orwhere('ticket','LIKE','%'.$busqueda.'%')
        ->orwhere('serie','LIKE','%'.$busqueda.'%')
        ->orwhere('n_producto','LIKE','%'.$busqueda.'%')
        ->orwhere('so','LIKE','%'.$busqueda.'%')
        ->orwhere('procesador','LIKE','%'.$busqueda.'%')
        ->orwhere('hdd','LIKE','%'.$busqueda.'%')
        ->orwhere('ssd','LIKE','%'.$busqueda.'%')
        ->orwhere('ram','LIKE','%'.$busqueda.'%')
        ->orwhere('mantenimiento','LIKE','%'.$busqueda.'%')
    
        
        ->paginate(5);

        $data = [
            'empresas'=>$empresas,
            'busqueda'=>$busqueda,
        ];
        return view('empresas.index',$data);


        //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $empresas->links() !!}
    }



    public function pdf()
    {
        //Con paginación
        $empresas = Empresa::paginate();
        $pdf = PDF::setPaper('a3','landscape')->loadView('empresas.pdf',['empresas'=>$empresas]);
        //return $pdf->stream();
        return $pdf->download('empresas.pdf');


        
        //al usar esta paginacion, recordar poner en el el index.blade.php este codigo  {!! $empresas->links() !!}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'usuario' => 'required',
            'tipo' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'ticket' => 'required',
            'serie' => 'required',
            'n_producto' => 'required',
            'so' => 'required',
            'procesador' => 'required',
            'hdd' => 'required',
            'ssd' => 'required',
            'ram' => 'required',
            'mantenimiento' => 'required',
        ]);
    
        Empresa::create($request->all());
    
        return redirect()->route('empresas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('empresas.editar',compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        request()->validate([
            'usuario' => 'required',
            'tipo' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'ticket' => 'required',
            'serie' => 'required',
            'n_producto' => 'required',
            'so' => 'required',
            'procesador' => 'required',
            'hdd' => 'required',
            'ssd' => 'required',
            'ram' => 'required',
            'mantenimiento' => 'required',
        ]);
        $empresa->update($request->all());
        return redirect()->route('empresas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect()->route('empresas.index');
    }
}
