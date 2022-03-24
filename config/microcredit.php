<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Landlord Doamin
    |--------------------------------------------------------------------------
    |
    | Landlord Doamin
    |
     */
    'landlord_domain' => env( 'LANDLORD_DOMAIN', 'https://microcredit.dev' ),
    /*
    |--------------------------------------------------------------------------
    | Default Roles
    |--------------------------------------------------------------------------
    |
    | Default roles cannot be edited or deleted
    |
     */
    'system_roles' => ['Super Admin', 'Admin', 'Stuff', 'Viewer', 'guest'],

    /*
    |--------------------------------------------------------------------------
    | Role Name of landlord
    |--------------------------------------------------------------------------
    |
    | role name of landlord
    |
     */
    'landlord_role' => 'Super Admin',

    'settings'      => [
        ['group' => 'general', 'key' => 'site_title', 'label' => 'Site Name', 'type' => 'text', 'help_text' => ''],
        ['group' => 'general', 'key' => 'logo', 'label' => 'Site Logo', 'type' => 'image', 'help_text' => ''],
    ],
];
