<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
<<<<<<< HEAD
    /** @use HasFactory<\Database\Factories\LeningFactory> */
    use HasFactory;

    protected $fillable = 
    [
        'user_id',
        'copy_id',
        'start',
        'end',
        'extension',
        'notice'
=======
    /** @use HasFactory<\Database\Factories\LendingFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'copy_id',
        'start',
        "end",
        "extension",
        "notice"
>>>>>>> 4fb75fe062fc5398ee306474d394d4e905998750
    ];

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('user_id', '=', $this->getAttribute('user_id'))
            ->where('copy_id', '=', $this->getAttribute('copy_id'))
            ->where('start', '=', $this->getAttribute('start'));
<<<<<<< HEAD

        return $query;
    }

=======
        return $query;
    }
>>>>>>> 4fb75fe062fc5398ee306474d394d4e905998750
}
