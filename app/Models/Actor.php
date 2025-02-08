<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $connection = 'mysql_sakila';  // Usa la connessione Sakila
    protected $table = 'actor';
    protected $primaryKey = 'actor_id';
    public $timestamps = false;

    // Relazione con i film
    public function films()
    {
        return $this->belongsToMany(Film::class, 'film_actor', 'actor_id', 'film_id');
    }
}

