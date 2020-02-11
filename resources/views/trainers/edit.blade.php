@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')

    {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' =>'PUT', 'files' => true]) !!}
        <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin-top: 20px;" class="card-img-top <!--rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Trainer">

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('avatar', 'Avatar') !!}
            <div class="custom-file">
                {!! Form::file('avatar', ['class' => 'custom-file-input', 'accept' => '.png, .jpg, .jpeg']) !!}
                {!! Form::label('inputGroupFile04', 'Seleccionar archivo', ['class' => 'custom-file-label']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('descripcion', 'Descripción') !!}
            {!! Form::textarea('descripcion', null, ['rows' => 3, 'class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('Actulizar', ['class' => 'btn btn-primary'])!!}
    {!! Form::close() !!}
@endsection