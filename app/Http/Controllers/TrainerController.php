<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Trainer;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Storage;

use LaraDex\HTTP\Requests\StoreTrainerRequest;

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
    public function store(StoreTrainerRequest $request)
    {
        /**
         * Almacenamiento de la imagen del formulario
         */
        if($request->hasFile('avatar')){
            $file = $request->file('avatar'); //Guardamos la imagen en una variable
            $name = time().$file->getClientOriginalName(); //Le asignamos un nombre a la imagen junto a la fecha
            $file->move(public_path().'/images/', $name); //Le asignamos la direccion en donde almacenamos el archivo
        }
        
        $trainer = new Trainer();
        $trainer->name = $request->input('name'); //Que atributo se almacena en que campo
        $trainer->avatar = $name;
        $trainer->slug = $request->input('slug');
        $trainer->descripcion = $request->input('descripcion');
        $trainer->save(); //Para almacenar los recursos en la BD

        return 'Saved';

        //return $request->input('name'); // Espesifica que estributo de lo que se esta enviando se quiere ver
        //return $request->all(); Para poder ver que es lo que se envia
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //$trainer = Trainer::where('slug','=',$slug)->firstOrFail(); //Busca la informacion del entrenador segun el slug que se este pasando
        //$trainer = Trainer::find($id);
    
        return view('trainers.show', compact('trainer')); //Retornamos la informacion a la vista
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->fill($request->except('avatar')); //Para actualizar la informacion que recibimos del $request
        if($request->hasFile('avatar')){
            $file = $request->file('avatar'); //Guardamos la imagen en una variable
            $name = time().$file->getClientOriginalName(); //Le asignamos un nombre a la imagen junto a la fecha
            $trainer->avatar = $name;
            $file->move(public_path().'/images/', $name); //Le asignamos la direccion en donde almacenamos el archivo
        }
        $trainer->save(); //Almacenamos la informacion

        return 'Informacion actualizada';
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
