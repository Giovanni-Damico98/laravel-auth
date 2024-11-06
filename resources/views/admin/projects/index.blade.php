@extends('layouts.app')
@section('page-title', 'Projects Home')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center">My Projects</h1>
            </div>
            {{--
            !!! TODO !!!
            --}}
            <div class="col-12 text-center my-3">
                <a href="#" class="btn btn-primary">Create a new project</a>
            </div>

            @forelse ($projects as $project)
                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card w-100 pt-2">
                        <div class="card-body">
                            <h5 class="card-title">Project Name: {{ $project->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Started on: {{ $project->date }}</h6>
                            <p class="card-text">
                                <strong>Languages used:</strong> {{ $project->languages }}
                            </p>
                            <p class="card-text">
                                {{ $project->description }}
                            </p>
                        </div>
                        {{-- Action Buttons --}}
                        <div class="card-footer d-flex flex-column">
                            {{-- Show Button --}}
                            <a href="{{ route('admin.projects.show', ['id' => $project->id]) }}"
                                class="btn btn-primary mb-2">Show more...</a>
                            {{-- Edit Button --}}
                            {{-- <a href="{{ route('admin.projects.edit', ['id' => $project->id]) }}"
                                class="btn btn-warning mb-2">Edit</a> --}}
                            {{-- Delete Form --}}
                            {{-- <form action="{{ route('admin.projects.delete', ['id' => $project->id]) }}" method="POST"
                                class="w-100">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger w-100">Delete</button>
                            </form> --}}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <h2 class="text-center">Non è presente alcun progetto!</h2>
                </div>
            @endforelse
        </div>
    </div>

@endsection
