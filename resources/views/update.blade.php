@extends('layout')

@section('content')


            <form class="" action="{{ route('todo.save',['id' => $task->id])}}" method="post">
                {{ csrf_field() }}
                <input type="text" name="entertodo" class="form-control input-lg" placeholder="Create a new todo" value="{{ $task->todo }}">
            </form>


@stop
