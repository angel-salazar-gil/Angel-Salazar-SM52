<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();

        return view('trainers.index', compact('trainers'));
        //return 'Hola desde el controlador resourse';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('avatar')){
            $file = $request->file('avatar'); //Guardamos la imagen en una variable
            $name = time().$file->getClientOriginalName(); //Le asignamos un nombre a la imagen junto a la fecha
            $file->move(public_path().'/images/', $name); //Le asignamos la direccion en donde almacenamos el archivo
        }
        /*
        $trainer = new Trainer();
        $trainer->name = $request->input('name'); //Que atributo se almacena en que campo
        $trainer->avatar = $name;
        $trainer->save(); //Para almacenar los recursos en la BD

        return 'Saved';
        */
        return $request;
        //return $request->input('name'); // Espesifica que estributo de lo que se esta enviando se quiere ver
        //return $request->all(); Para poder ver que es lo que se envia
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
