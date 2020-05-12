@extends('layouts.app')

@section('title')
    Create Todo
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card card-default">
                <div class="card-header">
                    Create Todo
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group m-2 lead">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="/store-todo" method="post">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <textarea class="w-100" name="description" rows="10" placeholder="Enter Description"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit">Create Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection