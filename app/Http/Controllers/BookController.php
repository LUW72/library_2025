<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function booksWithCopies()
    {
        return Book::with("toCopies")->get();
    }

    public function reservationsForBooks()
    {
        return Book::with("toReservations")->get();
    }    
}
