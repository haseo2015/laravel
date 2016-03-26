<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    // valido per l'altro servizio
    'facebook' => [
        'client_id' => '1542777405946107',
        'client_secret' => '1fa1d51ae2156a88265318cfd446717a',
        'redirect' => 'http://localhost:8000/',
    ],
    /*'facebook' => [
        'client_id'     => '1542777405946107',
        'client_secret' => '1fa1d51ae2156a88265318cfd446717a',
        'scope'         => [],
    ],*/

    'google' => [
            'client_id' => '838149181428-sk867c84cofn8uoqe59p20m90hk44pgg.apps.googleusercontent.com',
            'client_secret' => 'R4ztt7OuK5OZ3WkbPEdMBwsO',
            'redirect' => 'http://localhost:8000/',
        ],

    'github' => [
        'client_id' => '721452bf121585ef63aa',
        'client_secret' => '135c37a6f3e4a8ac79deef9355d41234f3a59d7a',
        'redirect' => 'http://localhost:8000/account/github',
    ],

];
