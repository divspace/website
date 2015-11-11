<?php

return [
    'default' => env('QUEUE_DRIVER', 'sync'),
    'connections' => [
        'sync' => [
            'driver' => 'sync',
        ]
    ]
];