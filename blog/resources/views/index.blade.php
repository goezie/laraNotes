<!DOCTYPE html>
<html>
<head>
	<title>dadacc</title>
</head>
<body>

	<h1> jaan is gay</h1>
	<ul>
	@foreach ($notes as $note)
    <li>
				<h2>{{ $note->title}}</h2>
				<h3>{{ $note->technology}}</h3>
        <h3>{{ $note->text }}<h3>
        <button><a href="/notes/delete/{{ $note->id }}">Delete me</a></button>

    </li>
	@endforeach
	<ul>

</body>
</html>