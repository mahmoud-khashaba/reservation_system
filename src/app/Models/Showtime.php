<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;
    protected $table = 'showtimes';

    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }

    public function hall()
    {
        return $this->belongsTo('App\Models\Hall');
    }


}
