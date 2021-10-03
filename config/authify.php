<?php
return [
    'features' => [
        'login' => true,

        'register' => true,

        'password' => [
            'reset' => true,
            'update' => true
        ],

        'verification' => true,
        
        '2fa' => [
            'email' => true,
            'push' => false,
            'sms' => false,
            'software' => false,
            'voice' => false,
        ]
    ]
];
