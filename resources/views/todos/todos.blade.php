@extends("layouts/master")


@section('title')
My Todos
@endsection

@foreach($todos as $todo)

<ul>
<!-- 
<li><a href="todos/{{$todo->id}}">{{ $todo->content }}</a></li>
-->
<li><a href="{{ route( 'todo', ['todo'=>$todo->id] ) }}">{{ $todo->content }}</a></li>

</ul>

@endforeach
