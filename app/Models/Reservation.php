<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = 
    [
        'book_id',
        'user_id',
        'start',
        'message'
=======
    protected $fillable = [
        'book_id',
        'user_id',
        'start',
        "message"
>>>>>>> 4fb75fe062fc5398ee306474d394d4e905998750
    ];

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('book_id', '=', $this->getAttribute('book_id'))
            ->where('user_id', '=', $this->getAttribute('user_id'))
            ->where('start', '=', $this->getAttribute('start'));
<<<<<<< HEAD

        return $query;
    }

=======
        return $query;
    }
>>>>>>> 4fb75fe062fc5398ee306474d394d4e905998750
}
