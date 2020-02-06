@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripcion</label>
            <textarea class="form-control" name="descripcion" rows="3"></textarea>
        </div>
        
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar" class="form-control-file" accept=".png, .jpg,.jpeg">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection