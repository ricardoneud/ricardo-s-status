<?php
/*
 * Copyright (c) 2021 by HerrTxbias.
 *
 * Using / Editing this without my consent is not allowed.
 */


return [

    /*
    |--------------------------------------------------------------------------
    | UptimeRobot Language Lines
    |--------------------------------------------------------------------------
    |
    | Please do not edit these lines, as they are managed by our translation
    | system. Thank you.
    |
    */

    'title_prefix' => 'Uptime-Robot',
    'title' => 'Monitore',
    'subtitle' => 'Hinweis: Die hier angezeigten Daten werden jede Minute aktualisiert.',
    'table' => [
        'head' => [
            'id' => 'ID',
            'monitor_id' => 'Monitor-ID',
            'name' => 'Name',
            'status' => 'UR-Status',
            'component' => 'Komponente',
            'metric' => 'Metrik',
            'data_import' => 'Daten-Import',
        ],
        'body' => [
            'data_import_active' => 'Aktiv',
            'data_import_paused' => 'Pausiert',
            'actions' => [
                'update' => 'Update'
            ]
        ]
    ],
    'modal_update' => [
        'title' => 'Monitor aktualisieren',
        'component' => 'Komponente',
        'metric' => 'Metrik',
        'submit' => 'Update',
    ]
];
