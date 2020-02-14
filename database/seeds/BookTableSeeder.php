<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Author;
use Carbon\Carbon;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::truncate(); // Evita duplicar datos
        
        $author = new Author();
        $author->name = "name author1";
        $author->save();
        
        $author = new Author();
        $author->name = "name author2";
        $author->save();

        $author = new Author();
        $author->name = "name author3";
        $author->save();

        Book::truncate(); // Evita duplicar datos

        $book = new Book();
        $book->title = "Mi primer libro";
        $book->publish_date = Carbon::now();
        $book->author_id = 1;
        $book->save();

        $book = new Book();
        $book->title = "Mi Segundo libro";
        $book->publish_date = Carbon::now();
        $book->author_id = 1;
        $book->save();

        $book = new Book();
        $book->title = "Mi Tercer libro";
        $book->publish_date = Carbon::now();
        $book->author_id = 2;
        $book->save();
    }    
}
