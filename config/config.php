<?php
   /*
 * Secret key and Site key get on https://www.google.com/recaptcha
 * */
return [
    'key'           => env('RECAPTCHA_KEY'),
    'secret'        => env('RECAPTCHA_SECRET'),
    'script_url'    => 'https://www.google.com/recaptcha/api.js',
    'verify_url'    => 'https://www.google.com/recaptcha/api/siteverify',
    'error_message' => 'reCAPTCHA validation failed. Please try again.',
    'log_responses' => false,
];

