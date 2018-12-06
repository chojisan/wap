<?php

return [
    'name' => 'Auth',

    'activations' => [

        'model' => 'Modules\Auth\Entities\Activation',

        'expires' => 259200,

        'lottery' => [2, 100],

    ],
];
