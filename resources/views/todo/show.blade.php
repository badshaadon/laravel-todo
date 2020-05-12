@extends('layouts.app')

@section('title')
    Single Todos
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="card card-default">
                <div class="card-header text-center display-1 text-success">
                    {{ $todo->name }}
                </div>
                <div class="card-body">
                    {{ $todo->description }}
                </div>
                <div class="btn-group">
                    <a class="btn btn-primary w-50 m-1" style="border: 2px solid gray;" href="/todos/{{ $todo->id }}/edit">Edit</a>
                    <a class="btn btn-primary w-50 m-1" style="border: 2px solid gray;" href="/todos/{{ $todo->id }}/delete">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection