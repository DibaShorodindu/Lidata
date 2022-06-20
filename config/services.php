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
        'client_id' => '561149640187-p8hgpjd0eki6rokovmevu47801unh0ma.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost/Lidata/user/google/callback',
    ],


    'facebook' => [
        'client_id' => '1847953295409204',
        'client_secret' => '64dded023cd7aaaa51284fde5debea7e',
        'redirect' => 'http://localhost/Lidata/auth/facebook/callback',
    ],

];
