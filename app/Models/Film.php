<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $connection = 'mysql_sakila';  // Usa la connessione Sakila
    protected $table = 'film';
    protected $primaryKey = 'film_id';
    public $timestamps = false;  // Se la tabella non ha `created_at` e `updated_at`

    // Relazione con gli attori (molti-a-molti)
    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'film_actor', 'film_id', 'actor_id');
    }

    // Relazione con le categorie (molti-a-molti)
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'film_category', 'film_id', 'category_id');
    }
}

