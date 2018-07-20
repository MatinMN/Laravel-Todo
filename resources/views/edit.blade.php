@extends('wrapper')

@section('contenct')

        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Todo list</h1>
            <p class="lead">Best todo app in the universe</p>
        </div>
        </div>

        <div class="container">
            <form action="" method="POST">
            {{csrf_field()}}
                <div class="form-row">
                    <div class="col-10">
                        <input type="text" value="{{$todo->todo}}" name="todo"  class="form-control" />
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-success ">Save changes</button>
                    </div>
                </div>
                
            </form>
            <br/>
        </div>
@stop
