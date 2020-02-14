<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Book;

class PagesController extends Controller
{
    public function inicio(){
        $book = Book::all();
        return view ('welcome', compact('book'));
    }

    public function crear(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'author_id'=>'required',
            'publish_date'=>'required',
        ]);
        //return $request->all();
        $autorNuevo= new App\author;
        $autorNuevo->name = $request->name;
        $bookNuevo = new App\book;
        $bookNuevo->title = $request->title;
        $bookNuevo->author_id = $request->author_id;
        $bookNuevo->publish_date = $request->publish_date;

        $bookNuevo->save();
        $autorNuevo->save();
        return back()->with('mensaje','creado exitosamente');

    }
    
    public function editar($id)
    {
        $bookEdit =App\book::findOrFail($id);
        return view('Books.edit',compact('bookEdit'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'author_id'=>'required',
            'publish_date'=>'required',
        ]);
        $autorUpdate= new App\author;
        $autorUpdate->name = $request->name;
        $bookUpdate = new App\book;
        $bookUpdate->title = $request->title;
        $bookUpdate->author_id = $request->author_id;
        $bookUpdate->publish_date = $request->publish_date;   
            
        $bookUpdate->save();
        $autorUpdate->save();
        return back()->with('mensaje','actualizado Exitosamente');
    }
    
    public function Eliminar($id)
    {
        $bookeliminar = App\book::findOrFail($id);
        $bookeliminar->delete();
        return back()->with('mensaje','eliminada Exitosamente');
    }
}
