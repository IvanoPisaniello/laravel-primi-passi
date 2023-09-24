<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {




    $films = [
        [
            'nome' => 'Il Padrino',
            'cognome' => 'Coppola',
            'descrizione' => 'Un film di mafia epico che segue la storia della famiglia Corleone.'
        ],
        [
            'nome' => 'Titanic',
            'cognome' => 'Cameron',
            'descrizione' => 'Una storia d\'amore ambientata sul leggendario transatlantico che affondò.'
        ],
        [
            'nome' => 'Forrest Gump',
            'cognome' => 'Zemeckis',
            'descrizione' => 'La straordinaria vita di Forrest Gump, un uomo con un QI inferiore alla media.'
        ],
        [
            'nome' => 'Il Signore degli Anelli',
            'cognome' => 'Jackson',
            'descrizione' => 'Un epico fantasy che segue la missione per distruggere l\'Unico Anello.'
        ],
        [
            'nome' => 'Pulp Fiction',
            'cognome' => 'Tarantino',
            'descrizione' => 'Una storia intricata che segue diversi personaggi coinvolti in crimini.'
        ],
        [
            'nome' => 'Interstellar',
            'cognome' => 'Nolan',
            'descrizione' => 'Un viaggio spaziale per cercare una nuova casa per l\'umanità.'
        ],
        [
            'nome' => 'La La Land',
            'cognome' => 'Chazelle',
            'descrizione' => 'Una storia d\'amore tra un musicista e un attrice a Los Angeles.'
        ],
        [
            'nome' => 'Il Cavaliere Oscuro',
            'cognome' => 'Nolan',
            'descrizione' => 'Il ritorno di Batman per affrontare il criminale Joker a Gotham City.'
        ],
        [
            'nome' => 'Matrix',
            'cognome' => 'Wachowski',
            'descrizione' => 'Un hacker scopre la verità dietro la realtà simulata da una macchina.'
        ],
        [
            'nome' => 'Il Gladiatore',
            'cognome' => 'Scott',
            'descrizione' => 'La storia di un gladiatore romano che cerca vendetta contro l\'imperatore.'
        ],
    ];




    return view('home', ['films' => $films]);
});
