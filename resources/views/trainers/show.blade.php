@extends('layouts.app')

@section('title', 'Trainer')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        <!-- Button trigger modal -->
       

        <!-- Modal -->
        
    @endif
    <img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Trainer">
    <div class="text-center">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante libero, interdum laoreet porttitor sit amet, blandit sed lorem. Nulla facilisi. Morbi tempor ante id erat sodales placerat.
            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec tristique et ligula at laoreet. Praesent pellentesque, nisi vel egestas molestie, diam lectus ornare felis, sit amet mollis odio nulla quis sem. Donec euismod neque tempor condimentum consectetur. 
        </p>
        <div class="btn-group btn-group-toggle">
            <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary" aria-disabled="true">Editar</a>
            {!! Form::open([ 'route' => ['trainers.destroy', $trainer->slug], 'method' => 'DELETE']) !!}
                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection