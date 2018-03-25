@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-6 offset-3">
            <form class="" action="/create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" name="entertodo" class="form-control input-lg" placeholder="Create a new todo">
            </form>
        </div>
    </div>

    @foreach($tasks as $task)
        <hr>
        {{ $task->todo }} <a href="{{ route('todo.delete', ['id' => $task->id]) }}" class="btn btn-danger"> x </a> <a href="{{ route('todo.update', ['id' => $task->id]) }}" class="btn btn-info"> Update </a>

        @if(!$task->completed)
            <a href="{{ route('todo.completed', ['id' => $task->id]) }}" class="btn btn-success"> Mark AS Complete </a>
        @else
            <span class="">Completed!</span>
        @endif


    @endforeach

@stop
