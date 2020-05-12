@extends('layouts.app')

@section('title')
    Single Todos
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card card-default">
                <div class="card-header">
                    {{ $todo->name }}
                </div>
                <div class="card-body">
                    {{ $todo->description }}
                </div>
                <a class="btn btn-primary" href="/todos/{{ $todo->id }}/edit">Edit</a>
            </div>
        </div>
    </div>
@endsection