<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla </title>
</head>
<body>

<h1>Crear </h1>
@if(session('mensaje'))

<div>{{session('mensaje')}}</div>

@endif

<form action="{{route('Book.crear')}}"method="post">
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
    
    <input type="text" name="name" placeholder="name" value="{{old('name')}}">
    <input type="text" name="title" placeholder="title" value="{{old('title')}}">
    <input type="date" name="publish_date" placeholder="publish_date" value="{{old('publish_date')}}">
    <input type="text" name="author_id" placeholder="author_id" value="{{old('author_id')}}">
    <button type="submit">Registrar</button>
    
</form>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Libro</th>
            <th>Autor</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    <tbody>
    <?php
    foreach ($book as $libro) {
       ?>
       
     <tr>
     
            <th>{{$libro->id}}</th>
            <td>{{$libro->title}}</td>
            <td>{{$libro->Author->name}}</td>
            <td>{{$libro->publish_date->format('d /m /y')}}</td>
            <td><button>
            <a href="{{route('Books.edit',$libro)}}">Editar</a>
            </button>
            <form action="{{route('Books.eliminar',$libro)}}" method="post">
            @method ('DELETE')
            @csrf
            <button type="submit">Eliminar</button>
            </form>
           
            </td>

        </tr>
<?php } ?>
        
    </tbody>
</table>
    
</body>
</html>
