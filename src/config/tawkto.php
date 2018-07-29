<?php

return [

    /*
    |--------------------------------------------------------------------------
    | tawk.to API Key
    |--------------------------------------------------------------------------
    |
    | Set this value to the key from your admin dashboard in "Direct Chat Link"
    | at: https://dashboard.tawk.to/#/admin
    |
    | Example: If your "Direct Chat Link" is https://tawk.to/chat/54f52bfdf7bcaa72719c6b7/default
    | then your API Key is "54f52bfdf7bcaa72719c6b7".
    |
    */
    'api_key' => env('TAWKTO_API_KEY', 'no_api_key_set_in_env'),

];