@extends('layouts.app')

@section('title', 'Trainers')

@section('content')
<div class="row">
    @foreach ($trainers as $trainers)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
            <img src="images/{{$trainers->avatar}}" class="card-img-top" alt="Trainer" height="300px">
                <div class="card-body">
                    <h5 class="card-title">{{$trainers->name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection