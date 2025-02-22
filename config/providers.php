<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Package Service Providers
    |--------------------------------------------------------------------------
    |
    | Here is where you can register package service providers for your
    | application. These service providers may be automatically loaded
    | or you may manually add them to the array.
    |
    */

    'providers' => [
        Prettus\Repository\Providers\RepositoryServiceProvider::class,
        CodeProject\Providers\CodeProjectRepositoryProvider::class,
        // Outros providers que você deseja registrar...
    ],
];
