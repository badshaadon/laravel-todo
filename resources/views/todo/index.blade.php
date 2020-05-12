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
                            <li class="list-group-item my-2" style="border: 5px solid gray;">
                                {{ $todo->name }}
                                <a class="btn btn-primary float-right ml-3" href="/todos/{{ $todo->id }}">View</a>
                                @if (!$todo->compeleted)
                                    <a class="btn btn-success float-right" href="/todos/{{ $todo->id }}/compeleted">Compelete</a>
                                @else
                                    <a class="btn btn-secondary btn-disabled float-right" href="#">Compeleted</a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection