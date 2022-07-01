<?php

return [

    'api_key' => env('MAILCHIMP_APIKEY'),

    /*
     * If you want to add to your mailchimp audience when a user registers, set this to `true`
     */
    'add_new_users' => false,

    'users' => [
        'check_consent' => true,
        'consent_field' => 'consent',
        'disable_opt_in' => false,
        'interests_field' => 'interests',
        'marketing_permissions_field' => 'gdpr',
        'marketing_permissions_field_ids' => [
            [
                'field_name' => null,
                'id' => null,
            ],
        ],
        'merge_fields' => [
            [
            ],
        ],
        'primary_email_field' => 'email',
    ],

    /*
     * The form submissions to add to your Mailchimp Audiences
     */
    'forms' => [
        [
            'form' => 'newsletter',
            'check_consent' => false,
            'disable_opt_in' => true,
            'primary_email_field' => 'email',
            'audience_id' => '3516ed133d',
        ],
    ],
];
