<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Invitation Expiration Default
    |--------------------------------------------------------------------------
    |
    | Default Expiry time in Hours from current time.
    | i.e now() + expires (hours)
    |
    */
    'expires' => 1440,//2 month

    /*
    |--------------------------------------------------------------------------
    | User Model
    |--------------------------------------------------------------------------
    */
        'UserModel' => 'App\Models\Auth\User',

    /*
    |--------------------------------------------------------------------------
    | Invitation Model
    |--------------------------------------------------------------------------
    */
    'InvitationModel' => 'Junaidnasir\Larainvite\Models\LaraInviteModel'
];