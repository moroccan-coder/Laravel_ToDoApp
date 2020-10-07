<html>
<head>

<meta charset="UTF-8">
<title>List of Todos</title>

</head>


<ul>


@foreach($todos as $todo)

<li>{{ $todo->content }}</li>

@endforeach

</ul>


</html>