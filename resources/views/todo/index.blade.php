@extends('layouts.app')

@section('title')
    All Todos
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card card-default">
                <div class="card-header">
                    All Todos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}
                                <a class="btn btn-primary float-right" href="/todos/{{ $todo->id }}">View</a>
                                <a class="btn btn-primary float-right" href="/todos/{{ $todo->id }}/compeleted">Compelete</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection