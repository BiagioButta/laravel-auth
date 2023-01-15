@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Project</h1>
    <div class="text-end">
        <a class="btn btn-success" href="{{route('admin.projects.create')}}">Crea nuovo project</a>
    </div>

    @if(session()->has('message'))
    <div class="alert alert-success mb-3 mt-3">
        {{ session()->get('message') }}
    </div>
    @endif

    <div class="row row-cols-4">
        @foreach($projects as $project)
        <div class="col">
            <div class="card" style="width: 18rem;">
                @if ($project->cover_image)
                <img src="{{ asset('storage/' . $project->cover_image) }}" alt="...">
                @else
                <img src="{{ Vite::asset('resources/img/Senza titolo.png') }}" alt="">
                @endif
                <div class="card-body">
                  <h5 class="card-title"><a href="{{route('admin.projects.show', $project->slug)}}" title="View Post">{{$project->title}}</a></h5>
                  <p class="card-text">{{Str::limit($project->content,100)}}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{$project->languages}}</li>
                  <li class="list-group-item">{{$project->team}}</li>
                  <li class="list-group-item">{{$project->publication_date}}</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">{{$project->link_github}}</a>
                </div>
                <div>
                    <a class="link-secondary" href="{{route('admin.projects.edit', $project->slug)}}" title="Edit Post"><i class="fa-solid fa-pen"></i></a>
                    <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$project->title}}"><i class="fa-solid fa-trash-can"></i></button>
                     </form>
                </div>
              </div>
        </div>
        @endforeach
    </div>
        </div>
    </div>
</div>
   
@include('partials.admin.modal-delete')
@endsection

