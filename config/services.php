<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '515566905555-23nsg263i1jukm14s73ek9b26iv7agrr.apps.googleusercontent.com',
        'client_secret' => 'JIczMxYaAnX234TaMN_63UB2',
        'redirect' => 'http://localhost:8000/login/google/callback',
      ], 

    'facebook' => [
        'client_id' => '534621687122556',
        'client_secret' => '3d4899d8d238332eae7a19f80db479f2',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'github' => [
        'client_id' => '672eeb104d8433361da4',
        'client_secret' => '44947db62e2fb33eb99c32bf52bfa207cb5f1b86',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],

];
