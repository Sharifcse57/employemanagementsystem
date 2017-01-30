<?php

return [

'guards' => [
    
    'employee' => [
        'driver' => 'session',
        'provider' => 'employees',
    ],


    'admin' => [
        'driver' => 'session',
        'provider' => 'admins',
    ],
],






'providers' => [
    'employees' => [
        'driver' => 'eloquent',
        'model' => App\Employee::class,
    ],


    'admins' => [
        'driver' => 'eloquent',
        'model' => App\Admin::class,
    ],
],









];
