<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::with('citas','medicamentos')->get();
        //$pacientes = Paciente::all();
        return view('paciente.pacienteIndex', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.pacienteCreate');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:255',
            'apellidop' => 'required|max:255',
            'apellidom' => 'required|max:255',
            'sexo' => 'required',
            'edad' => 'required|min:0|max:99',
            'telefono' => 'max:20',
            'direccion' => 'required|max:255',
        ]);

        Paciente::create($request->all());

        return redirect('/paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return view('paciente.pacienteShow', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        //Gate::authorize('editar-paciente', $paciente);
        return view('paciente.pacienteEdit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:255',
            'apellidop' => 'required|max:255',
            'apellidom' => 'required|max:255',
            'sexo' => 'required',
            'edad' => 'required|min:0|max:99',
            'telefono' => 'max:20',
            'direccion' => 'required|max:255',
        ]);

       // $paciente->nombre = $request->nombre;
       // $paciente->apellidop = $request->apellidop;
       // $paciente->nombre = $request->apellidom;
        //$paciente->nombre = $request->nombre;
       // $paciente->nombre = $request->nombre;
        //$paciente->nombre = $request->nombre;
        //$paciente->nombre = $request->nombre;
        //$paciente->save();

        Paciente::where('id', $paciente->id)->update($request->except('_token', '_method'));

        return redirect('/paciente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //$this->authorize('delete', $paciente);
        $paciente->delete();
        return redirect('/paciente');
    }

    public function enviaCorreo(Paciente $paciente)
    {
        Mail::to($paciente->user>email)->send(new NotificacionPaciente($paciente));
        return back();
    }
}
