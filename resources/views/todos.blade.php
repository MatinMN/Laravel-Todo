@extends('wrapper')

@section('contenct')

        <div class="container">
            <form action="" method="POST">
            {{csrf_field()}}
                <div class="form-row">
                    <div class="col-10">
                        <input type="text" name="todo" placeholder="Create a new todo" class="form-control" />
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-dark ">Add</button>
                    </div>
                </div>
                
            </form>
            <hr/>
        @foreach($todos as $todo)
            <div class="row">
                <div class="col-10">
                    <p>
                    @if($todo->completed)
                    <a href="#" class="badge badge-success">Completed</a> {{$todo->todo}} 
                    @else
                    <a href="{{route('todo.mark',['id'=>$todo->id])}}" class="badge badge-dark">Mark as complete</a> {{$todo->todo}} 
                    @endif
                    </p>
                </div>
                <div class="col-1">
                    <a href="{{route('todo.delete',['id'=>$todo->id])}}" class="btn btn-danger">Delete</a>
                </div> 
                <div class="col-1">
                    <a href="{{route('todo.edit',['id'=>$todo->id])}}" class="btn btn-info">Edit</a>
                </div> 
            </div>
            <hr/>
        @endforeach
        </div>
@stop