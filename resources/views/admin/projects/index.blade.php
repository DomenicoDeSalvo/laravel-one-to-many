@extends('layouts.app')

@section('title','Progetti')

@section('content')
<!-- Corpo Index -->
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
                <th>Ambito</th>
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
                        {{optional($project->type)->name}}
                    </td>
                    <td>
                        {{$project->starting_date}}
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <a class='btn btn-secondary' href="{{route('admin.projects.edit', $project)}}">Modifica</a>
                            <button class="btn btn-danger delete">Elimina</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Modale -->
    <div class="modal" tabindex="-1" id="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Elimina</h5>
              <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>E SE POI TE NE PENTI?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">No</button>
              <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                        
                @csrf
                @method('DELETE')

                <button class="btn btn-danger delete">Si</button>
            
            </form> 
            </div>
          </div>
        </div>
    </div>

@endsection