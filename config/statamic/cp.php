<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Control Panel
    |--------------------------------------------------------------------------
    |
    | Whether the Control Panel should be enabled, and through what route.
    |
    */

    'enabled' => env('CP_ENABLED', true),

    'route' => env('CP_ROUTE', 'cp'),

    /*
    |--------------------------------------------------------------------------
    | Start Page
    |--------------------------------------------------------------------------
    |
    | When a user logs into the Control Panel, they will be taken here.
    | For example: "dashboard", "collections/pages", etc.
    |
    */

    'start_page' => 'dashboard',

    /*
    |--------------------------------------------------------------------------
    | Dashboard Widgets
    |--------------------------------------------------------------------------
    |
    | Here you may define any number of dashboard widgets. You're free to
    | use the same widget multiple times in different configurations.
    |
    */

    'widgets' => [
        'getting_started',
    ],

    /*
    |--------------------------------------------------------------------------
    | Date Format
    |--------------------------------------------------------------------------
    |
    | When a date is encountered throughout the Control Panel, it will be
    | rendered in the following format unless overridden in specific
    | fields, and so on. Any PHP date variables are permitted.
    |
    | This takes precedence over the date_format in system.php.
    |
    | https://www.php.net/manual/en/function.date.php
    |
    */

    'date_format' => 'd-m-Y',

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    |
    | The numbers of items to show on each paginated page.
    |
    */

    'pagination_size' => 50,

    /*
    |--------------------------------------------------------------------------
    | Links to Documentation
    |--------------------------------------------------------------------------
    |
    | Show contextual links to documentation throughout the Control Panel.
    |
    */

    'link_to_docs' => env('STATAMIC_LINK_TO_DOCS', false),

    /*
    |--------------------------------------------------------------------------
    | Support Link
    |--------------------------------------------------------------------------
    |
    | Set the location of the support link in the "Useful Links" header
    | dropdown. Use 'false' to remove it entirely.
    |
    */

    'support_url' => env('STATAMIC_SUPPORT_URL', 'https://ciits.co.uk'),

    /*
    |--------------------------------------------------------------------------
    | Theme
    |--------------------------------------------------------------------------
    |
    | Optionally spice up the login and other outside-the-control-panel
    | screens. You may choose between "rad" or "business" themes.
    |
    */

    'theme' => env('STATAMIC_THEME', ' business'),

    /*
    |--------------------------------------------------------------------------
    | White Labeling
    |--------------------------------------------------------------------------
    |
    | When in Pro Mode you may replace the Statamic name, logo, favicon,
    | and add your own CSS to the control panel to match your
    | company or client's brand.
    |
    */

    'custom_cms_name' => env('STATAMIC_CUSTOM_CMS_NAME', 'The Betting Guys'),

    'custom_logo_url' => env('STATAMIC_CUSTOM_LOGO_URL', '/images/tbg-logo-sm.png'),

    'custom_favicon_url' => env('STATAMIC_CUSTOM_FAVICON_URL', '/images/icons/favicon.ico'),

    'custom_css_url' => env('STATAMIC_CUSTOM_CSS_URL', null),

];
