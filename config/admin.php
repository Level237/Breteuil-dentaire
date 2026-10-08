<?php

return [

    /*
    |--------------------------------------------------------------------------
    | URI de connexion administrateur
    |--------------------------------------------------------------------------
    |
    | Chemin public du formulaire de login, hors /admin/login.
    | Définissez une valeur unique dans .env (lettres, chiffres, tirets).
    |
    */
    'login_uri' => env('ADMIN_LOGIN_URI', 'atelier-abbaye'),

    'login_max_attempts' => (int) env('ADMIN_LOGIN_MAX_ATTEMPTS', 5),

    'login_decay_seconds' => (int) env('ADMIN_LOGIN_DECAY_SECONDS', 900),

];
