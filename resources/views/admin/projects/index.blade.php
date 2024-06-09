@extends('layouts.app')

@section('title','Progetti')

@section('content')

    <div class="container my-4">
        <h1 class="text-center"> Il mio portfolio</h1>
    </div>
    <div class="container">
        <a class='btn btn-primary' href="{{route('admin.projects.create')}}">Aggiungi Progetto</a>
    </div>
    <div class="container my-4">
        <table class="table">
            <thead>
                <th>Numero</th>
                <th>Titolo</th>
                <th>Descrizione</th>
                <th>Inizio progetto</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>
                        {{$project->id}}

                    </td>
                    <td>
                        <a href="{{route('admin.projects.show', $project)}}">{{$project->title}}</a>
                    </td>
                    <td>
                        {{$project->description}}
                    </td>
                    <td>
                        {{$project->starting_date}}
                    </td>
                    <td>
                        <button class="btn">1</button>
                        <button class="btn">2</button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection