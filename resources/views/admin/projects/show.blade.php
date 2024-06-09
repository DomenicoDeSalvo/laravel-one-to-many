@extends('layouts.app')

@section('title')

    {{$project->title}}

@endsection

@section('content')
    <div class="container my-4">
        <div class="d-flex justify-content-between my-3 ">
                <a class='btn btn-secondary' href="{{route('admin.projects.edit', $project)}}">Modifica</a>
            <form action="{{route ('admin.projects.destroy', $project)}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn-danger btn">Elimina</button>
            </form>
        </div>
    </div>
    <div class="container text-center">
        <h2>{{$project->title}}</h2>    
    </div>
    <div class="container">
        <div class="my-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">{{$project->starting_date}}</h5>
                    <p class="card-text">{!!$project->description!!}</p>
                    <h5 class="card-title text-center">Link esterno:</h5>
                    <a href="{{$project->link}}">{{$project->link}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection