@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')

    {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' =>'PUT', 'files' => true]) !!}
        <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin-top: 20px;" class="card-img-top <!--rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Trainer">

        @include('trainers.form')
        
        {!! Form::submit('Actulizar', ['class' => 'btn btn-primary', 'data-toggle' => 'modal', 'data-target' => '#exampleModal'])!!}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Accion realizada con exito!!!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ session('status') }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@endsection