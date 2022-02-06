<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Cartesio web',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => true,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Cartesio</b>Web',
    'logo_img' => 'vendor/adminlte/dist/img/CartesioWebLogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Cartesio',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-default',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => 'nav-child-indent nav-compact',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => true,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
/*        
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,
        ],
*/        
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'text'        => 'Archivi',
            'icon'        => 'fas fa-fw fa-database',
            'submenu' => [
                [
                    'text' => 'Clienti',
                    'icon'        => 'fas fa-fw fa-users',
                    'url'  => '#',
                ],            
                [
                    'text' => 'Fornitori',
                    'icon'        => 'fas fa-fw fa-users',
                    'url'  => '#',
                ],                   
            ],
        ],


        [
            'text'        => 'Accettazione',
            'icon'        => 'far fa-fw fa-file',
            'submenu' => [
                [
                    'text' => 'Accettazione',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],            
                [
                    'text' => 'Gestione contratti',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],            
                [
                    'text' => 'Altre attività',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],    
                [
                    'text' => 'Modifica accettazione',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],                            
            ],            
        ],

        [
            'text'        => 'Segreteria',
            'icon'        => 'far fa-fw fa-file',
            'submenu' => [
                [
                    'text' => '7.3 Plan campionamenti',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],            
                [
                    'text' => 'Protocollo',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],   
                [
                    'text' => 'Gestione clienti',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],   
                [
                    'text' => 'Tariffario',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],                                            
            ],            
        ],

        [
            'text'        => 'Acquisti',
            'icon'        => 'far fa-fw fa-file',
            'submenu' => [
                [
                    'text' => '6.6 Getione acquisti',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],            
                [
                    'text' => '6.6. Gestione fornitori e lab est.',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],   
                [
                    'text' => 'Richiesta preventivi',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],   
                [
                    'text' => 'Consumi',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],                                            
            ],            
        ],

        [
            'text'        => 'Amministrazione',
            'icon'        => 'far fa-fw fa-file',
            'submenu' => [
                [
                    'text' => 'Protocollo',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],  
                [
                    'text' => 'Controllo di gestione',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],  
                [
                    'text' => 'Bilancio laboratorio',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],  
                [
                    'text' => 'Statistiche',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],  
                ['header' => 'Fornitori'],
                [
                    'text' => 'Registrazione fatture',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],  
                [
                    'text' => 'Elenco fatture',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],  
                [
                    'text' => 'Scadenziario',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],  
                ['header' => 'Clienti'],
                [
                    'text' => 'Elenco fatture',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],  
                [
                    'text' => 'Scadenziario',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],  
                [
                    'text' => 'Solleciti pagamenti',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],  
            ],            
        ],


        [
            'text'        => 'Laboratorio',
            'icon'        => 'far fa-fw fa-file',
            'submenu' => [
                [
                    'text' => '7.3 Plan campionamenti',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ], 
                [
                    'text' => '8.2 Distribuzioni documenti',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                    'submenu' => [
                        [
                            'text' => 'Metodi chimici',
                            'icon'        => 'far fa-fw fa-file',
                            'url'  => '#',
                        ], 
                        [
                            'text' => 'Metodi microbiologia',
                            'icon'        => 'far fa-fw fa-file',
                            'url'  => '#',
                        ], 
                        [
                            'text' => 'Procedure tecniche',
                            'icon'        => 'far fa-fw fa-file',
                            'url'  => '#',
                        ],         
                        [
                            'text' => 'Istruzioni operative',
                            'icon'        => 'far fa-fw fa-file',
                            'url'  => '#',
                        ],         
                        [
                            'text' => 'Doc. prescrittivi',
                            'icon'        => 'far fa-fw fa-file',
                            'url'  => '#',
                        ],         
                    ],    
                ], 
                [
                    'text' => 'Algoritmi di calcolo',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],                 
                [
                    'text' => 'Valutazioni scorte',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],  
                [
                    'text' => 'Gestione manutenzioni',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],   
                [
                    'text' => '6.5 Materiale di riferimento',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                    'submenu' => [
                        [
                            'text' => 'Materiali certificati',
                            'icon'        => 'far fa-fw fa-file',
                            'url'  => '#',
                        ],                    
                        [
                            'text' => 'Campioni di riferimento',
                            'icon'        => 'far fa-fw fa-file',
                            'url'  => '#',
                        ],                    
                    ],                                  
                ], 
                [
                    'text' => 'Preparati',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',                
                    'submenu' => [
                        [
                            'text' => 'di chimica',
                            'icon'        => 'far fa-fw fa-file',
                            'url'  => '#',
                        ],                    
                        [
                            'text' => 'di micro',
                            'icon'        => 'far fa-fw fa-file',
                            'url'  => '#',
                        ],                    
                    ],                  
                ], 
                [
                    'text' => '7.7 Ring test',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',                
                    'submenu' => [
                        [
                            'text' => 'di chimica',
                            'icon'        => 'far fa-fw fa-file',
                            'url'  => '#',
                        ],                    
                        [
                            'text' => 'di micro',
                            'icon'        => 'far fa-fw fa-file',
                            'url'  => '#',
                        ],                    
                    ],                  
                ],
                [
                    'text' => 'Recupero test di ripetibilità',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ], 
                [
                    'text' => 'Trans codifica',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],  
                [
                    'text' => 'Importa da strumento',
                    'icon'        => 'far fa-fw fa-file',
                    'url'  => '#',
                ],                                                                                   
            ],            
        ],




        [
            'header' => 'CONFIGURAZIONE',
            'can' => 'menu-admin'
        ],
        [
            'text'        => 'Utenti',
            'icon'        => 'fas fa-fw fa-users',
            'url'  => 'admin/users', 
            'can' => 'menu-admin'           
        ],



/*
        [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],
       
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'pages',
            'url'         => 'admin/pages',
            'icon'        => 'far fa-fw fa-file',
            'label'       => 4,
            'label_color' => 'success',
        ],
        ['header' => 'account_settings'],
        [
            'text' => 'profile',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],
        [
            'text'    => 'multilevel',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
            ],
        ],
        ['header' => 'labels'],
        [
            'text'       => 'important',
            'icon_color' => 'red',
            'url'        => '#',
        ],
        [
            'text'       => 'warning',
            'icon_color' => 'yellow',
            'url'        => '#',
        ],
        [
            'text'       => 'information',
            'icon_color' => 'cyan',
            'url'        => '#',
        ],
*/ 
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
