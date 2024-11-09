<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($projects as $project)
        <div>
            <h3>{{ $project->name }}</h3>
            <p>{{ $project->description }}</p>
            <a href="{{ url('products/'.$project->id.'/edit') }}">Edit</a>
            <form action="{{ url('products/'.$project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</body>
</html>