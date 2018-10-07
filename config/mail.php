<?php

return [

    'driver' => 'smtp',

    'host' => 'smtp.mailtrap.io',

    'port' => 2525,

    'from' => [
        'address' => 'mysite@example.com',
        'name' => config('app.name'),
    ],

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    'username' => "fe68e857ee0ba6",

    'password' => "8c05aa2c672f3b",

    'sendmail' => '/usr/sbin/sendmail -bs',

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
