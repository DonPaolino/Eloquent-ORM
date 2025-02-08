## Obiettivo del progetto

- Visualizzazione dei Film, Attori e Categorie con interfaccia in Blade.
- Dettagli di Film, Attori e Categorie con relazioni dinamiche.
- Eager Loading per ottimizzare il recupero degli attori e delle categorie di un film.
- Gestione multi-database.
- Uso di Facades per ottimizzare il codice.


## Per il secondo database

    DB_SAKILA_CONNECTION=mysql_sakila
    DB_SAKILA_HOST=127.0.0.1
    DB_SAKILA_PORT=3306
    DB_SAKILA_DATABASE=sakila
    DB_SAKILA_USERNAME=root
    DB_SAKILA_PASSWORD=####


## Struttura del Progetto

    /Eloquent-Sakila-Project
    │── /app
    │   ├── /Models
    │   │   ├── Film.php
    │   │   ├── Actor.php
    │   │   ├── Category.php
    │   ├── /Http/Controllers
    │   │   ├── FilmController.php
    │   │   ├── ActorController.php
    │   │   ├── CategoryController.php
    │── /resources/views
    │   ├── films.blade.php
    │   ├── film_details.blade.php
    │   ├── actors.blade.php
    │   ├── actor_details.blade.php
    │   ├── categories.blade.php
    │   ├── category_details.blade.php
    │── /routes
    │   ├── web.php
    │── .env
    │── composer.json
    │── README.md


## Rotte Web

- Film
    GET	/films	Mostra tutti i film
    GET	/films/{id}	Mostra i dettagli di un film
- Attori
    GET	/actors	Mostra tutti gli attori
    GET	/actors/{id}	Mostra i dettagli di un attore
- Categorie
    GET	/categories	Mostra tutte le categorie
    GET	/categories/{id}	Mostra i dettagli di una categoria