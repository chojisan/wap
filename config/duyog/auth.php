<?php

return [

    'users' => [
        'model' => \Modules\User\Entities\User::class,
    ],

    'activations' => [

        'model' => 'Modules\Auth\Entities\Activation',

        'expires' => 259200,

        'lottery' => [2, 100],

    ],

    'reminders' => [

        'model' => 'Module\Auth\Entities\Reminder',

        'expires' => 14400,

        'lottery' => [2, 100],

    ],
];
