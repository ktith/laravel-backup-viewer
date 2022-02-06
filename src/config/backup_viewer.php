<?php

return [

    /* -----------------------------------------------------------------
    |  Log files storage path
    | -----------------------------------------------------------------
     */
    'storage-path'  => storage_path(''),

    /* -----------------------------------------------------------------
    |  Route settings
    | -----------------------------------------------------------------
     */
    'route'         => [
        'enabled'    => true,
        'attributes' => [
            'prefix'     => 'backup-viewer',
            'middleware' => env('BACKUP_VIEWER_MIDDLEWARE') ? explode(',', env('BACKUP_VIEWER_MIDDLEWARE')) : null,
        ],
    ],
];
