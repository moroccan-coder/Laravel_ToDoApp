@extends('layouts.master');


@section('content')
    
<div class="card">

    <div class="card-body">

    <form action="{{ route('todos') }}" method="POST">
           @csrf
            <div class="form-group">
                <label for="todo">Todo</label>
                <input type="text" class="form-control" name="todo" id="todo">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ad Todo</button>
            </div>

        </form>

    </div>

</div>

@endsection