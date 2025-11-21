<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\String\b;

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

    public function specialAuthors($speciality)
    {
        return Book::where('author', 'LIKE', $speciality."%")->get();
    }

    public function bookReservedCount($id)
    {
        $pieces = DB::table("books as b")
            ->join("reservations as r", "b.id", "r.book_id")
            ->where("r.book_id", $id)
            ->count();

        return $pieces;
            
            
    }
}
