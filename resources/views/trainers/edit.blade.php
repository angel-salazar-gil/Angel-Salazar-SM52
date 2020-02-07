@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
    <form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin-top: 20px;" class="card-img-top <!--rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Trainer">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" value="{{$trainer->name}}" class="form-control" autocomplete="off" autofocus required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripcion</label>
            <textarea class="form-control" name="descripcion" placeholder="{{$trainer->descripcion}}" rows="3" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="">Avatar</label>
            <div class="custom-file">
                <input type="file" name="avatar" class="custom-file-input" accept=".png, .jpg,.jpeg">
                <label class="custom-file-label">Seleccionar nuevo archivo</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection