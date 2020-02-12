@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
<!-- Atrapamos el error y se lo mostramos al usuario -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}

        @include('trainers.form')

        {!! Form::submit('Guardar', ['class' => 'btn btn-primary'])!!}
    {!! Form::close() !!}
@endsection