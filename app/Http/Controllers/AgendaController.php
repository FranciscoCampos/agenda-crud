<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\AgendaRequest;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
         
        $contactos = Agenda::grupofamilia($request->get('grupo'))
                             ->nombre($request->get('nombre'))
                             ->paginate();
        
  
        return view('index' , compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgendaRequest $request)
    {  
        Agenda::create($request->all());

        return redirect('agenda');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacto = Agenda::find($id);
         
        return view('show', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacto = Agenda::findOrFail($id);

        return view('edit', compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AgendaRequest $request, $id)
    {  
        $contacto = Agenda::findOrFail($id);
        // dd($contacto);
        $contacto->nombre = $request->input('nombre');
        $contacto->apellido = $request->input('apellido');
        $contacto->email = $request->input('email');
        $contacto->avatar = $request->input('avatar');
        $contacto->grupo = $request->input('grupo');
        $contacto->save();
        return redirect('agenda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agenda::destroy($id);
        return redirect('agenda');
    }

}
