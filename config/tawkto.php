<?php

return [

    /*
    |--------------------------------------------------------------------------
    | tawk.to Key
    |--------------------------------------------------------------------------
    |
    | The "Property ID" key from your admin dashboard at:
    | https://dashboard.tawk.to/#/admin
    |
    | Deprecation notice:
    | Old : TAWKTO_API_KEY
    | New: TAWKTO_KEY
    |
    */
    'api_key' => env(
        'TAWKTO_KEY',
        env('TAWKTO_API_KEY') // Deprecation purposes only, delete this if this was a fresh installation!
    ),

];
