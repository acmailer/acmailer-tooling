<?php
declare(strict_types=1);

return [
    'acmailer_options' => [
        'default' => [
            'mail_adapter' => 'smtp',

            'message_options' => [
                'from' => 'me@foo.com',
                'reply_to' => 'jare@nawer.com',
                'to' => 'foobar@barfoo.com',
                'subject' => 'This email is cool',
                'body' => [
                    'content' => 'very very cool',
                ],
                'attachments' => [
                    'dir' => [
                        'iterate' => false,
                        'path' => 'data/mail/attachments',
                        'recursive' => false,
                    ],
                ],
            ],

            'smtp_options' => [
                'host' => 'smtp.gmail.com',
                'port' => 587,
                'connection_class' => 'login',
                'connection_config' => [
                    'username' => 'account@gmail.com',
                    'password' => 'foobar',
                    'ssl' => 'tls',
                ],
            ],
        ],
    ],
];
