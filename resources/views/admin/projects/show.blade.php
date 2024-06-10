@extends('layouts.app')

@section('title')

    {{$project->title}}

@endsection

@section('content')
<!-- Corpo dello show -->
    <div class="container my-4">
        <div class="d-flex justify-content-between my-3 ">
            <a class='btn btn-secondary' href="{{route('admin.projects.edit', $project)}}">Modifica</a>
            <button class="btn btn-danger delete">Elimina</button>
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
                    <h6 class="card-title text-center">{{optional($project->type)->name}}</h6>
                    <p class="card-text">{!!$project->description!!}</p>
                    <h5 class="card-title text-center">Link esterno:</h5>
                    <a href="{{$project->link}}">{{$project->link}}</a>
                </div>
            </div>
        </div>
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