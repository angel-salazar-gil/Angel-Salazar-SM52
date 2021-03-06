@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
    @include('common.errors')
    @include('common.success')

    {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' =>'PUT', 'files' => true]) !!}
        <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin-top: 20px;" class="card-img-top <!--rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Trainer">

        @include('trainers.form')
        
        {!! Form::submit('Actulizar', ['class' => 'btn btn-primary', 'data-toggle' => 'modal', 'data-target' => '#exampleModal']) !!}
    {!! Form::close() !!}
@endsection