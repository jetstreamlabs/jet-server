<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => [
        'api/*', 
        'sanctum/csrf-cookie',
        'forgot-password',
        'login',
        'logout',
        'register',
        'reset-password',
        'two-factor-challenge',
        'email/verification-notification',
        'user/confirm-password',
        'user/confirmed-password-status',
        'user/password',
        'user/profile-information',
        'user/two-factor-authentication',
        'user/two-factor-qr-code',
        'user/two-factor-recovery-codes'
    ],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];
