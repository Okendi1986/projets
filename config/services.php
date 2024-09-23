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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    /*'firebase' => [ 
        'apiKey'=> "AIzaSyAJZqqM6zrEVLY9ejewHcD3Xw0gtsIaTXA",
        'authDomain'=> "auto-sale-df036.firebaseapp.com",
        'databaseURL'=> "https://auto-sale-df036-default-rtdb.firebaseio.com",
        'projectId'=> "auto-sale-df036",
        'storageBucket'=> "auto-sale-df036.appspot.com",
        'messagingSenderId'=> "1089222187369",
        'appId'=> "1:1089222187369:web:e6b1f6e56cfc5ca3e405f8"
    ],*/

    'firebase' => [
    'credentials' => env('FIREBASE_CREDENTIALS'),
    'database_url' => env('FIREBASE_DATABASE_URL'),
    ],

];
