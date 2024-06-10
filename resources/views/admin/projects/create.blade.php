@extends('layouts.app')

@section('title','Nuovo progetto')
@section('content')
    <div class="container my-4 text-center">
        <h2>Nuovo progetto</h2>    
    </div>
    <div class="container my-2">
        <form action="{{route('admin.projects.store')}}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}" placeholder="Inserisci il titolo del progetto">
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Ambito</label>
                <select class="form-control" name="type_id" id="type_id">
                    <option value="">Seleziona Ambito</option>
                    @foreach ($types as $type)
                        <option @selected ($type->id == old('type_id')) value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{old('description')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="starting_date" class="form-label">Data di inizio</label>
                <input type="date" name="starting_date" class="form-control" id="starting_date" value="{{old('starting_date')}}" >
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link alla pagina del progetto</label>
                <input type="text" name="link" class="form-control" id="link" value="{{old('link')}}" placeholder="URL">
            </div>
            <div class="text-center my-4">
                <button class="btn btn-primary">Aggiungi</button>
            </div>
        </form>
    </div>

    <!-- Messaggio errore -->
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

@endsection