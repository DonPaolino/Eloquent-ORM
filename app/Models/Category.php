<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $connection = 'mysql_sakila';  // Usa la connessione Sakila
    protected $table = 'category';
    protected $primaryKey = 'category_id';
    public $timestamps = false;

    // Relazione con i film
    public function films()
    {
        return $this->belongsToMany(Film::class, 'film_category', 'category_id', 'film_id');
    }
}

