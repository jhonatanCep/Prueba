<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar </h1>

@if(session('mensaje'))

<div>{{session('mensaje')}}</div>

@endif

    <form action="{{route('Books.update',$bookEdit->id)}}"method="post">
    @method('PUT')
    @csrf

@error('name')
    <div>
        el nombre es obligatorio        
    </div>
@enderror

@error('title')
    <div>
        el Titulo es obligatorio        
    </div>
@enderror

@error('publish_date')
    <div>
        la fecha  es obligatoria        
    </div>
@enderror

@error('author_id')
    <div>
        el autor  es obligatorio        
    </div>
@enderror
    <input type="text" name="name" placeholder="name" value="{{$bookEdit->Author->name}}">
    <input type="text" name="title" placeholder="title" value="{{$bookEdit->title}}">
    <input type="date" name="publish_date" placeholder="publish_date" value="{{$bookEdit->publish_date->format('d /m /y')}}">
    <input type="text" name="author_id" placeholder="author_id" value="{{$bookEdit->author_id}}">
    <button type="submit">Actualizar</button>
    
</form>
</body>
</html>