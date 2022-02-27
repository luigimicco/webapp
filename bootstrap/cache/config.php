<?php return array (
  'adminlte' => 
  array (
    'title' => 'Cartesio web',
    'title_prefix' => '',
    'title_postfix' => '',
    'use_ico_only' => false,
    'use_full_favicon' => true,
    'logo' => '<b>Cartesio</b>Web',
    'logo_img' => 'vendor/adminlte/dist/img/CartesioWebLogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => NULL,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Cartesio',
    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-default',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,
    'layout_topnav' => NULL,
    'layout_boxed' => NULL,
    'layout_fixed_sidebar' => NULL,
    'layout_fixed_navbar' => NULL,
    'layout_fixed_footer' => 
    array (
      'xs' => false,
      'md' => true,
      'xl' => true,
      'lg' => true,
    ),
    'layout_dark_mode' => NULL,
    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',
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
    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => true,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,
    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',
    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,
    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',
    'menu' => 
    array (
      0 => 
      array (
        'text' => 'Info',
        'icon' => 'fas fa-fw fa-info',
        'url' => '#',
        'topnav' => true,
        'data' => 
        array (
          'toggle' => 'modal',
          'target' => '#modalCustom',
        ),
      ),
      1 => 
      array (
        'type' => 'darkmode-widget',
        'topnav_right' => true,
      ),
      2 => 
      array (
        'type' => 'sidebar-menu-search',
        'text' => 'cerca ...',
        'id' => 'sidebarMenuSearch',
      ),
      3 => 
      array (
        'type' => 'fullscreen-widget',
        'topnav_right' => true,
      ),
      4 => 
      array (
        'text' => 'Archivi',
        'icon' => 'fas fa-fw fa-database',
        'submenu' => 
        array (
          0 => 
          array (
            'text' => 'Clienti',
            'icon' => 'fas fa-fw fa-users',
            'url' => '#',
          ),
          1 => 
          array (
            'text' => 'Fornitori',
            'icon' => 'fas fa-fw fa-users',
            'url' => '#',
          ),
        ),
      ),
      5 => 
      array (
        'text' => 'Accettazione',
        'icon' => 'far fa-fw fa-file',
        'submenu' => 
        array (
          0 => 
          array (
            'text' => 'Accettazione',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          1 => 
          array (
            'text' => 'Gestione contratti',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          2 => 
          array (
            'text' => 'Altre attività',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          3 => 
          array (
            'text' => 'Modifica accettazione',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
        ),
      ),
      6 => 
      array (
        'text' => 'Segreteria',
        'icon' => 'far fa-fw fa-file',
        'submenu' => 
        array (
          0 => 
          array (
            'text' => '7.3 Plan campionamenti',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          1 => 
          array (
            'text' => 'Protocollo',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          2 => 
          array (
            'text' => 'Gestione clienti',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          3 => 
          array (
            'text' => 'Tariffario',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
        ),
      ),
      7 => 
      array (
        'text' => 'Acquisti',
        'icon' => 'far fa-fw fa-file',
        'submenu' => 
        array (
          0 => 
          array (
            'text' => '6.6 Getione acquisti',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          1 => 
          array (
            'text' => '6.6. Gestione fornitori e lab est.',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          2 => 
          array (
            'text' => 'Richiesta preventivi',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          3 => 
          array (
            'text' => 'Consumi',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
        ),
      ),
      8 => 
      array (
        'text' => 'Amministrazione',
        'icon' => 'far fa-fw fa-file',
        'submenu' => 
        array (
          0 => 
          array (
            'text' => 'Protocollo',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          1 => 
          array (
            'text' => 'Controllo di gestione',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          2 => 
          array (
            'text' => 'Bilancio laboratorio',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          3 => 
          array (
            'text' => 'Statistiche',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          4 => 
          array (
            'header' => 'Fornitori',
          ),
          5 => 
          array (
            'text' => 'Registrazione fatture',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          6 => 
          array (
            'text' => 'Elenco fatture',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          7 => 
          array (
            'text' => 'Scadenziario',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          8 => 
          array (
            'header' => 'Clienti',
          ),
          9 => 
          array (
            'text' => 'Elenco fatture',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          10 => 
          array (
            'text' => 'Scadenziario',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          11 => 
          array (
            'text' => 'Solleciti pagamenti',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
        ),
      ),
      9 => 
      array (
        'text' => 'Laboratorio',
        'icon' => 'far fa-fw fa-file',
        'submenu' => 
        array (
          0 => 
          array (
            'text' => '7.3 Plan campionamenti',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          1 => 
          array (
            'text' => '8.2 Distribuzioni documenti',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
            'submenu' => 
            array (
              0 => 
              array (
                'text' => 'Metodi chimici',
                'icon' => 'far fa-fw fa-file',
                'url' => '#',
              ),
              1 => 
              array (
                'text' => 'Metodi microbiologia',
                'icon' => 'far fa-fw fa-file',
                'url' => '#',
              ),
              2 => 
              array (
                'text' => 'Procedure tecniche',
                'icon' => 'far fa-fw fa-file',
                'url' => '#',
              ),
              3 => 
              array (
                'text' => 'Istruzioni operative',
                'icon' => 'far fa-fw fa-file',
                'url' => '#',
              ),
              4 => 
              array (
                'text' => 'Doc. prescrittivi',
                'icon' => 'far fa-fw fa-file',
                'url' => '#',
              ),
            ),
          ),
          2 => 
          array (
            'text' => 'Algoritmi di calcolo',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          3 => 
          array (
            'text' => 'Valutazioni scorte',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          4 => 
          array (
            'text' => 'Gestione manutenzioni',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          5 => 
          array (
            'text' => '6.5 Materiale di riferimento',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
            'submenu' => 
            array (
              0 => 
              array (
                'text' => 'Materiali certificati',
                'icon' => 'far fa-fw fa-file',
                'url' => '#',
              ),
              1 => 
              array (
                'text' => 'Campioni di riferimento',
                'icon' => 'far fa-fw fa-file',
                'url' => '#',
              ),
            ),
          ),
          6 => 
          array (
            'text' => 'Preparati',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
            'submenu' => 
            array (
              0 => 
              array (
                'text' => 'di chimica',
                'icon' => 'far fa-fw fa-file',
                'url' => '#',
              ),
              1 => 
              array (
                'text' => 'di micro',
                'icon' => 'far fa-fw fa-file',
                'url' => '#',
              ),
            ),
          ),
          7 => 
          array (
            'text' => '7.7 Ring test',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
            'submenu' => 
            array (
              0 => 
              array (
                'text' => 'di chimica',
                'icon' => 'far fa-fw fa-file',
                'url' => '#',
              ),
              1 => 
              array (
                'text' => 'di micro',
                'icon' => 'far fa-fw fa-file',
                'url' => '#',
              ),
            ),
          ),
          8 => 
          array (
            'text' => 'Recupero test di ripetibilità',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          9 => 
          array (
            'text' => 'Trans codifica',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
          10 => 
          array (
            'text' => 'Importa da strumento',
            'icon' => 'far fa-fw fa-file',
            'url' => '#',
          ),
        ),
      ),
      10 => 
      array (
        'text' => 'Esempio',
        'icon' => 'fas fa-fw fa-cogs',
        'url' => 'simple',
      ),
      11 => 
      array (
        'header' => 'CONFIGURAZIONE',
        'can' => 'menu-admin',
      ),
      12 => 
      array (
        'text' => 'Pannello di controllo',
        'icon' => 'fas fa-fw fa-cogs',
        'url' => 'admin/acp',
        'can' => 'menu-admin',
      ),
    ),
    'filters' => 
    array (
      0 => 'JeroenNoten\\LaravelAdminLte\\Menu\\Filters\\GateFilter',
      1 => 'JeroenNoten\\LaravelAdminLte\\Menu\\Filters\\HrefFilter',
      2 => 'JeroenNoten\\LaravelAdminLte\\Menu\\Filters\\SearchFilter',
      3 => 'JeroenNoten\\LaravelAdminLte\\Menu\\Filters\\ActiveFilter',
      4 => 'JeroenNoten\\LaravelAdminLte\\Menu\\Filters\\ClassesFilter',
      5 => 'JeroenNoten\\LaravelAdminLte\\Menu\\Filters\\LangFilter',
      6 => 'JeroenNoten\\LaravelAdminLte\\Menu\\Filters\\DataFilter',
    ),
    'plugins' => 
    array (
      'Datatables' => 
      array (
        'active' => false,
        'files' => 
        array (
          0 => 
          array (
            'type' => 'js',
            'asset' => false,
            'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
          ),
          1 => 
          array (
            'type' => 'js',
            'asset' => false,
            'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
          ),
          2 => 
          array (
            'type' => 'css',
            'asset' => false,
            'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
          ),
        ),
      ),
      'Select2' => 
      array (
        'active' => false,
        'files' => 
        array (
          0 => 
          array (
            'type' => 'js',
            'asset' => false,
            'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
          ),
          1 => 
          array (
            'type' => 'css',
            'asset' => false,
            'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
          ),
        ),
      ),
      'Chartjs' => 
      array (
        'active' => false,
        'files' => 
        array (
          0 => 
          array (
            'type' => 'js',
            'asset' => false,
            'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
          ),
        ),
      ),
      'Sweetalert2' => 
      array (
        'active' => true,
        'files' => 
        array (
          0 => 
          array (
            'type' => 'js',
            'asset' => false,
            'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
          ),
        ),
      ),
      'Pace' => 
      array (
        'active' => false,
        'files' => 
        array (
          0 => 
          array (
            'type' => 'css',
            'asset' => false,
            'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
          ),
          1 => 
          array (
            'type' => 'js',
            'asset' => false,
            'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
          ),
        ),
      ),
      'BsCustomFileInput' => 
      array (
        'active' => false,
        'files' => 
        array (
          0 => 
          array (
            'type' => 'js',
            'asset' => true,
            'location' => 'vendor/bs-custom-file-input/bs-custom-file-input.min.js',
          ),
        ),
      ),
      'summernote' => 
      array (
        'active' => false,
        'files' => 
        array (
          0 => 
          array (
            'type' => 'js',
            'asset' => true,
            'location' => 'vendor/summernote/summernote-bs4.min.js',
          ),
        ),
      ),
    ),
    'iframe' => 
    array (
      'default_tab' => 
      array (
        'url' => NULL,
        'title' => NULL,
      ),
      'buttons' => 
      array (
        'close' => true,
        'close_all' => true,
        'close_all_other' => true,
        'scroll_left' => true,
        'scroll_right' => true,
        'fullscreen' => true,
      ),
      'options' => 
      array (
        'loading_screen' => 1000,
        'auto_show_new_tab' => true,
        'use_navbar_items' => true,
      ),
    ),
    'livewire' => false,
    'copyright' => 'Cartesio',
    'version' => '1.0.0',
    'contact_url' => 'contact',
  ),
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://127.0.0.1:8000',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'it',
    'fallback_locale' => 'it',
    'faker_locale' => 'it_IT',
    'key' => 'base64:OR+kxjPAsbTCWUuanKs8B3kexq1rmLdzLxxA4eTEF98=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\EventServiceProvider',
      25 => 'App\\Providers\\RouteServiceProvider',
      26 => 'Kyslik\\ColumnSortable\\ColumnSortableServiceProvider',
      27 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'breadcrumbs' => 
  array (
    'view' => 'partials.breadcrumbs',
    'files' => 'C:\\Work\\CartesioWeb\\cartesio\\routes/breadcrumbs.php',
    'unnamed-route-exception' => true,
    'missing-route-bound-breadcrumb-exception' => false,
    'invalid-named-breadcrumb-exception' => true,
    'manager-class' => 'Diglactic\\Breadcrumbs\\Manager',
    'generator-class' => 'Diglactic\\Breadcrumbs\\Generator',
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\Work\\CartesioWeb\\cartesio\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'columnsortable' => 
  array (
    'columns' => 
    array (
      'alpha' => 
      array (
        'rows' => 
        array (
          0 => 'nome',
          1 => 'cognome',
          2 => 'description',
          3 => 'email',
          4 => 'name',
          5 => 'slug',
        ),
        'class' => 'fas fa-sort-alpha',
      ),
      'amount' => 
      array (
        'rows' => 
        array (
          0 => 'amount',
          1 => 'price',
        ),
        'class' => 'fas fa-sort-amount',
      ),
      'numeric' => 
      array (
        'rows' => 
        array (
          0 => 'created_at',
          1 => 'updated_at',
          2 => 'level',
          3 => 'id',
          4 => 'phone_number',
        ),
        'class' => 'fas fa-sort-numeric',
      ),
    ),
    'enable_icons' => true,
    'default_icon_set' => 'fas fa-sort',
    'sortable_icon' => 'fas fa-sort',
    'clickable_icon' => false,
    'icon_text_separator' => ' ',
    'asc_suffix' => '-up',
    'desc_suffix' => '-down',
    'anchor_class' => NULL,
    'active_anchor_class' => NULL,
    'direction_anchor_class_prefix' => NULL,
    'uri_relation_column_separator' => '.',
    'formatting_function' => 'ucfirst',
    'format_custom_titles' => true,
    'inject_title_as' => NULL,
    'allow_request_modification' => true,
    'default_direction' => 'asc',
    'default_direction_unsorted' => 'asc',
    'default_first_column' => false,
    'join_type' => 'leftJoin',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => false,
    'max_age' => false,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'cartesio',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'cartesio',
        'username' => 'luigi',
        'password' => 'luigi',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'cartesio',
        'username' => 'luigi',
        'password' => 'luigi',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'cartesio',
        'username' => 'luigi',
        'password' => 'luigi',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'public',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\Work\\CartesioWeb\\cartesio\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\Work\\CartesioWeb\\cartesio\\storage\\app/public',
        'url' => 'http://127.0.0.1:8000/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
      ),
    ),
    'links' => 
    array (
      'C:\\Work\\CartesioWeb\\cartesio\\public\\storage' => 'C:\\Work\\CartesioWeb\\cartesio\\storage\\app/public',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\Work\\CartesioWeb\\cartesio\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\Work\\CartesioWeb\\cartesio\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'C:\\Work\\CartesioWeb\\cartesio\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.mailtrap.io',
        'port' => '2525',
        'encryption' => NULL,
        'username' => 'f2089c3ca8c93b',
        'password' => '76dc68bcf2201c',
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => 'noreply@mytest.com',
      'name' => 'Laravel',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\Work\\CartesioWeb\\cartesio\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'database',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\Work\\CartesioWeb\\cartesio\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\Work\\CartesioWeb\\cartesio\\resources\\views',
    ),
    'compiled' => 'C:\\Work\\CartesioWeb\\cartesio\\storage\\framework\\views',
    'expires' => true,
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
      'censor_request_body_fields' => 
      array (
        0 => 'password',
      ),
    ),
    'send_logs_as_events' => true,
    'censor_request_body_fields' => 
    array (
      0 => 'password',
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 94,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
