<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla </title>
</head>
<body>
<h1>Editar{{$book->id}}</h1>
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
            <td>{{$libro->publish_date}}</td>
            <td><button>
            <a href="">Editar</a>
            </button>
            <form action="{{}}" method="post">
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