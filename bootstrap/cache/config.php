<?php return array (
  'app' => 
  array (
    'name' => 'VidyGxP ErP',
    'env' => 'local',
    'debug' => false,
    'url' => 'http://localhost/',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:rSKzoQLgQ2bb6yM6JrmWw1G5rVr6gdsztVxeKund90U=',
    'cipher' => 'AES-256-CBC',
    'maintenance' => 
    array (
      'driver' => 'file',
    ),
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
      14 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      15 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      16 => 'Illuminate\\Queue\\QueueServiceProvider',
      17 => 'Illuminate\\Redis\\RedisServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\EventServiceProvider',
      25 => 'App\\Providers\\RouteServiceProvider',
      26 => 'Collective\\Html\\HtmlServiceProvider',
      27 => 'Barryvdh\\Debugbar\\ServiceProvider',
      28 => 'App\\Providers\\MenuServiceProvider',
      29 => 'Chatify\\ChatifyServiceProvider',
      30 => 'Lab404\\Impersonate\\ImpersonateServiceProvider',
      31 => 'Milon\\Barcode\\BarcodeServiceProvider',
      32 => 'RachidLaasri\\LaravelInstaller\\Providers\\LaravelInstallerServiceProvider',
      33 => 'Srmklive\\PayPal\\Providers\\PayPalServiceProvider',
      34 => 'Paytabscom\\Laravel_paytabs\\PaypageServiceProvider',
      35 => 'PragmaRX\\Google2FALaravel\\ServiceProvider',
      36 => 'Anhskohbo\\NoCaptcha\\NoCaptchaServiceProvider',
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
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Number' => 'Illuminate\\Support\\Number',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Process' => 'Illuminate\\Support\\Facades\\Process',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
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
      'Vite' => 'Illuminate\\Support\\Facades\\Vite',
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
      'Debugbar' => 'Barryvdh\\Debugbar\\Facades\\Debugbar',
      'Chatify' => 'Chatify\\Facades\\ChatifyMessenger',
      'Menu' => 'Lavary\\Menu\\Facade',
      'DNS1D' => 'Milon\\Barcode\\Facades\\DNS1DFacade',
      'DNS2D' => 'Milon\\Barcode\\Facades\\DNS2DFacade',
      'Google2FA' => 'PragmaRX\\Google2FALaravel\\Facade',
      'NoCaptcha' => 'Anhskohbo\\NoCaptcha\\Facades\\NoCaptcha',
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
      'students' => 
      array (
        'driver' => 'session',
        'provider' => 'students',
      ),
      'customers' => 
      array (
        'driver' => 'session',
        'provider' => 'customers',
      ),
      'holiday' => 
      array (
        'driver' => 'session',
        'provider' => 'holiday',
      ),
      'api' => 
      array (
        'driver' => 'jwt',
        'provider' => 'users',
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
      'students' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Modules\\LMS\\Entities\\Student',
      ),
      'customers' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Modules\\TVStudio\\Entities\\TVStudioCustomer',
      ),
      'holiday' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Modules\\Holidayz\\Entities\\HotelCustomer',
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
      'students' => 
      array (
        'provider' => 'students',
        'table' => 'password_resets',
        'expire' => 60,
      ),
      'customers' => 
      array (
        'provider' => 'customers',
        'table' => 'password_resets',
        'expire' => 60,
      ),
      'holiday' => 
      array (
        'provider' => 'holiday',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
    'password_timeout' => 10800,
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
          'cluster' => NULL,
          'host' => 'api-mt1.pusher.com',
          'port' => 443,
          'scheme' => 'https',
          'encrypted' => true,
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
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
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/framework/cache/data',
        'lock_path' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/framework/cache/data',
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
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'vidygxp_erp_cache_',
  ),
  'captcha' => 
  array (
    'secret' => NULL,
    'sitekey' => NULL,
    'options' => 
    array (
      'timeout' => 30,
    ),
  ),
  'chatify' => 
  array (
    'name' => 'Messenger',
    'storage_disk_name' => 'public',
    'routes' => 
    array (
      'prefix' => 'chatify',
      'middleware' => 
      array (
        0 => 'web',
        1 => 'auth',
      ),
      'namespace' => 'App\\Http\\Controllers\\vendor\\Chatify',
    ),
    'api_routes' => 
    array (
      'prefix' => 'chatify/api',
      'middleware' => 
      array (
        0 => 'api',
      ),
      'namespace' => 'Chatify\\Http\\Controllers\\Api',
    ),
    'pusher' => 
    array (
      'key' => '',
      'secret' => '',
      'app_id' => '',
      'options' => 
      array (
        'cluster' => NULL,
        'encrypted' => false,
      ),
    ),
    'user_avatar' => 
    array (
      'folder' => 'users-avatar',
      'default' => 'avatar.png',
    ),
    'gravatar' => 
    array (
      'enabled' => false,
      'image_size' => 200,
      'imageset' => 'identicon',
    ),
    'attachments' => 
    array (
      'folder' => 'attachments',
      'download_route_name' => 'attachments.download',
      'allowed_images' => 
      array (
        0 => 'png',
        1 => 'jpg',
        2 => 'jpeg',
        3 => 'gif',
      ),
      'allowed_files' => 
      array (
        0 => 'zip',
        1 => 'rar',
        2 => 'txt',
      ),
      'max_upload_size' => 150,
    ),
    'colors' => 
    array (
      0 => '#2180f3',
      1 => '#2196F3',
      2 => '#00BCD4',
      3 => '#3F51B5',
      4 => '#673AB7',
      5 => '#4CAF50',
      6 => '#FFC107',
      7 => '#FF9800',
      8 => '#ff2522',
      9 => '#9C27B0',
    ),
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
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
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
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
        'database' => 'erpall',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'erpall',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
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
        'database' => 'erpall',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'erpall',
        'username' => 'root',
        'password' => '',
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
        'prefix' => 'vidygxp_erp_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => true,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'open' => false,
      'driver' => 'file',
      'path' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
      'hostname' => '127.0.0.1',
      'port' => 2304,
    ),
    'editor' => 'phpstorm',
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'ajax_handler_auto_show' => true,
    'ajax_handler_enable_tab' => true,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' => 
        array (
        ),
        'timeline' => false,
        'duration_background' => true,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => false,
        'show_copy' => false,
        'slow_threshold' => false,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'timeline' => false,
        'data' => false,
        'exclude_paths' => 
        array (
        ),
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_middleware' => 
    array (
    ),
    'route_domain' => NULL,
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
  ),
  'files_types' => 
  array (
    '3dmf' => '3dmf',
    '3dm' => '3dm',
    'avi' => 'avi',
    'ai' => 'ai',
    'bin' => 'bin',
    'bmp' => 'bmp',
    'cab' => 'cab',
    'c' => 'c',
    'c++' => 'c++',
    'class' => 'class',
    'css' => 'css',
    'csv' => 'csv',
    'cdr' => 'cdr',
    'doc' => 'doc',
    'dot' => 'dot',
    'docx' => 'docx',
    'dwg' => 'dwg',
    'eps' => 'eps',
    'exe' => 'exe',
    'gif' => 'gif',
    'gz' => 'gz',
    'gtar' => 'gtar',
    'flv' => 'flv',
    'fh4' => 'fh4',
    'fh5' => 'fh5',
    'fhc' => 'fhc',
    'help' => 'help',
    'hlp' => 'hlp',
    'html' => 'html',
    'htm' => 'htm',
    'ico' => 'ico',
    'imap' => 'imap',
    'inf' => 'inf',
    'jpe' => 'jpe',
    'jpeg' => 'jpeg',
    'jpg' => 'jpg',
    'js' => 'js',
    'java' => 'java',
    'latex' => 'latex',
    'log' => 'log',
    'm3u' => 'm3u',
    'midi' => 'midi',
    'mid' => 'mid',
    'mov' => 'mov',
    'mp4' => 'mp4',
    'mp3' => 'mp3',
    'mpeg' => 'mpeg',
    'mpg' => 'mpg',
    'mp2' => 'mp2',
    'ogg' => 'ogg',
    'phtml' => 'phtml',
    'php' => 'php',
    'pdf' => 'pdf',
    'pgp' => 'pgp',
    'png' => 'png',
    'pps' => 'pps',
    'ppt' => 'ppt',
    'ppz' => 'ppz',
    'pot' => 'pot',
    'ps' => 'ps',
    'qt' => 'qt',
    'qd3d' => 'qd3d',
    'qd3' => 'qd3',
    'qxd' => 'qxd',
    'rar' => 'rar',
    'ra' => 'ra',
    'ram' => 'ram',
    'rm' => 'rm',
    'rtf' => 'rtf',
    'spr' => 'spr',
    'sprite' => 'sprite',
    'stream' => 'stream',
    'swf' => 'swf',
    'svg' => 'svg',
    'sgml' => 'sgml',
    'sgm' => 'sgm',
    'tar' => 'tar',
    'tiff' => 'tiff',
    'tif' => 'tif',
    'tgz' => 'tgz',
    'tex' => 'tex',
    'txt' => 'txt',
    'vob' => 'vob',
    'wav' => 'wav',
    'wrl' => 'wrl',
    'xla' => 'xla',
    'xls' => 'xls',
    'xlc' => 'xlc',
    'xml' => 'xml',
    'zip' => 'zip',
    'json' => 'json',
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/uploads',
        'visibility' => 'public',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/app/public',
        'url' => 'http://localhost//storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
      ),
      'wasabi' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'endpoint' => NULL,
        'visibility' => 'public',
        'root' => '',
      ),
    ),
    'links' => 
    array (
      '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/public/storage' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/app/public',
    ),
  ),
  'forrest' => 
  array (
    'authentication' => 'WebServer',
    'credentials' => 
    array (
      'consumerKey' => NULL,
      'consumerSecret' => NULL,
      'callbackURI' => NULL,
      'loginURL' => NULL,
      'username' => NULL,
      'password' => NULL,
      'privateKey' => '',
    ),
    'parameters' => 
    array (
      'display' => '',
      'immediate' => false,
      'state' => '',
      'scope' => '',
      'prompt' => '',
    ),
    'defaults' => 
    array (
      'method' => 'get',
      'format' => 'json',
      'compression' => false,
      'compressionType' => 'gzip',
    ),
    'client' => 
    array (
      'http_errors' => true,
      'verify' => false,
    ),
    'storage' => 
    array (
      'type' => 'session',
      'path' => 'forrest_',
      'expire_in' => 3600,
      'store_forever' => false,
    ),
    'version' => '',
    'instanceURL' => '',
    'language' => 'en_US',
  ),
  'google2fa' => 
  array (
    'enabled' => true,
    'lifetime' => 0,
    'keep_alive' => true,
    'auth' => 'auth',
    'guard' => '',
    'session_var' => 'google2fa',
    'otp_input' => 'one_time_password',
    'window' => 1,
    'forbid_old_passwords' => false,
    'otp_secret_column' => 'google2fa_secret',
    'view' => 'googleauthentication::auth.2fa',
    'error_messages' => 
    array (
      'wrong_otp' => 'The \'One Time Password\' typed was wrong.',
      'cannot_be_empty' => 'One Time Password cannot be empty.',
      'unknown' => 'An unknown error has occurred. Please try again.',
    ),
    'throw_exceptions' => true,
    'qrcode_image_backend' => 'svg',
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
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
  ),
  'imap' => 
  array (
    'default' => 'default',
    'date_format' => 'd-M-Y',
    'accounts' => 
    array (
      'default' => 
      array (
        'host' => 'localhost',
        'port' => 993,
        'protocol' => 'imap',
        'encryption' => 'ssl',
        'validate_cert' => true,
        'username' => 'root@example.com',
        'password' => '',
        'authentication' => NULL,
        'proxy' => 
        array (
          'socket' => NULL,
          'request_fulluri' => false,
          'username' => NULL,
          'password' => NULL,
        ),
        'timeout' => 30,
        'extensions' => 
        array (
        ),
      ),
    ),
    'options' => 
    array (
      'delimiter' => '/',
      'fetch' => 2,
      'sequence' => 1,
      'fetch_body' => true,
      'fetch_flags' => true,
      'soft_fail' => false,
      'rfc822' => true,
      'debug' => false,
      'uid_cache' => true,
      'boundary' => '/boundary=(.*?(?=;)|(.*))/i',
      'message_key' => 'list',
      'fetch_order' => 'asc',
      'dispositions' => 
      array (
        0 => 'attachment',
        1 => 'inline',
      ),
      'common_folders' => 
      array (
        'root' => 'INBOX',
        'junk' => 'INBOX/Junk',
        'draft' => 'INBOX/Drafts',
        'sent' => 'INBOX/Sent',
        'trash' => 'INBOX/Trash',
      ),
      'decoder' => 
      array (
        'message' => 'utf-8',
        'attachment' => 'utf-8',
      ),
      'open' => 
      array (
      ),
    ),
    'flags' => 
    array (
      0 => 'recent',
      1 => 'flagged',
      2 => 'answered',
      3 => 'deleted',
      4 => 'seen',
      5 => 'draft',
    ),
    'events' => 
    array (
      'message' => 
      array (
        'new' => 'Webklex\\IMAP\\Events\\MessageNewEvent',
        'moved' => 'Webklex\\IMAP\\Events\\MessageMovedEvent',
        'copied' => 'Webklex\\IMAP\\Events\\MessageCopiedEvent',
        'deleted' => 'Webklex\\IMAP\\Events\\MessageDeletedEvent',
        'restored' => 'Webklex\\IMAP\\Events\\MessageRestoredEvent',
      ),
      'folder' => 
      array (
        'new' => 'Webklex\\IMAP\\Events\\FolderNewEvent',
        'moved' => 'Webklex\\IMAP\\Events\\FolderMovedEvent',
        'deleted' => 'Webklex\\IMAP\\Events\\FolderDeletedEvent',
      ),
      'flag' => 
      array (
        'new' => 'Webklex\\IMAP\\Events\\FlagNewEvent',
        'deleted' => 'Webklex\\IMAP\\Events\\FlagDeletedEvent',
      ),
    ),
    'masks' => 
    array (
      'message' => 'Webklex\\PHPIMAP\\Support\\Masks\\MessageMask',
      'attachment' => 'Webklex\\PHPIMAP\\Support\\Masks\\AttachmentMask',
    ),
  ),
  'installer' => 
  array (
    'core' => 
    array (
      'minPhpVersion' => '8.1.0',
    ),
    'final' => 
    array (
      'key' => true,
      'publish' => false,
    ),
    'requirements' => 
    array (
      'php' => 
      array (
        0 => 'openssl',
        1 => 'pdo',
        2 => 'mbstring',
        3 => 'tokenizer',
        4 => 'JSON',
        5 => 'cURL',
        6 => 'zip',
      ),
      'apache' => 
      array (
        0 => 'mod_rewrite',
      ),
    ),
    'permissions' => 
    array (
      'storage/' => '777',
      'storage/framework/' => '777',
      'storage/logs/' => '777',
      'bootstrap/cache/' => '777',
      'resources/lang' => '777',
      'uploads/' => '777',
      'Modules/' => '777',
    ),
    'environment' => 
    array (
      'form' => 
      array (
        'rules' => 
        array (
          'app_name' => 'required|string|max:50',
          'environment' => 'required|string|max:50',
          'environment_custom' => 'required_if:environment,other|max:50',
          'app_debug' => 'required|string',
          'app_log_level' => 'required|string|max:50',
          'app_url' => 'required|url',
          'database_connection' => 'required|string|max:50',
          'database_hostname' => 'required|string|max:50',
          'database_port' => 'required|numeric',
          'database_name' => 'required|string|max:50',
          'database_username' => 'required|string|max:50',
          'database_password' => 'nullable|string|max:50',
          'broadcast_driver' => 'required|string|max:50',
          'cache_driver' => 'required|string|max:50',
          'session_driver' => 'required|string|max:50',
          'queue_driver' => 'required|string|max:50',
          'redis_hostname' => 'required|string|max:50',
          'redis_password' => 'required|string|max:50',
          'redis_port' => 'required|numeric',
          'mail_driver' => 'required|string|max:50',
          'mail_host' => 'required|string|max:50',
          'mail_port' => 'required|string|max:50',
          'mail_username' => 'required|string|max:50',
          'mail_password' => 'required|string|max:50',
          'mail_encryption' => 'required|string|max:50',
          'pusher_app_id' => 'max:50',
          'pusher_app_key' => 'max:50',
          'pusher_app_secret' => 'max:50',
        ),
      ),
    ),
    'installed' => 
    array (
      'redirectOptions' => 
      array (
        'route' => 
        array (
          'name' => 'welcome',
          'data' => 
          array (
          ),
        ),
        'abort' => 
        array (
          'type' => '404',
        ),
        'dump' => 
        array (
          'data' => 'Dumping a not found message.',
        ),
      ),
    ),
    'installedAlreadyAction' => '',
    'updaterEnabled' => 'true',
  ),
  'jwt' => 
  array (
    'secret' => '4bl5AKG2MNBpdyWpz4m6EepuO1QNWaASaXrfJgy5VxGglU98oYNM0FzhJh3CswrK',
    'keys' => 
    array (
      'public' => NULL,
      'private' => NULL,
      'passphrase' => NULL,
    ),
    'ttl' => 6000,
    'refresh_ttl' => 20160,
    'algo' => 'HS256',
    'required_claims' => 
    array (
      0 => 'iss',
      1 => 'iat',
      2 => 'exp',
      3 => 'nbf',
      4 => 'sub',
      5 => 'jti',
    ),
    'persistent_claims' => 
    array (
    ),
    'lock_subject' => true,
    'leeway' => 0,
    'blacklist_enabled' => true,
    'blacklist_grace_period' => 0,
    'show_black_list_exception' => true,
    'decrypt_cookies' => false,
    'providers' => 
    array (
      'jwt' => 'PHPOpenSourceSaver\\JWTAuth\\Providers\\JWT\\Lcobucci',
      'auth' => 'PHPOpenSourceSaver\\JWTAuth\\Providers\\Auth\\Illuminate',
      'storage' => 'PHPOpenSourceSaver\\JWTAuth\\Providers\\Storage\\Illuminate',
    ),
  ),
  'khalti' => 
  array (
    'sck' => NULL,
    'env' => NULL,
    'url' => NULL,
    'callback_url' => NULL,
  ),
  'laratrust' => 
  array (
    'use_morph_map' => false,
    'checkers' => 
    array (
      'user' => 'default',
      'role' => 'default',
    ),
    'cache' => 
    array (
      'enabled' => true,
      'expiration_time' => 3600,
    ),
    'user_models' => 
    array (
      'users' => 'App\\Models\\User',
    ),
    'models' => 
    array (
      'role' => 'App\\Models\\Role',
      'permission' => 'App\\Models\\Permission',
      'team' => 'App\\Models\\Team',
    ),
    'tables' => 
    array (
      'roles' => 'roles',
      'permissions' => 'permissions',
      'teams' => 'teams',
      'role_user' => 'role_user',
      'permission_user' => 'permission_user',
      'permission_role' => 'permission_role',
    ),
    'foreign_keys' => 
    array (
      'user' => 'user_id',
      'role' => 'role_id',
      'permission' => 'permission_id',
      'team' => 'team_id',
    ),
    'middleware' => 
    array (
      'register' => true,
      'handling' => 'abort',
      'handlers' => 
      array (
        'abort' => 
        array (
          'code' => 403,
          'message' => 'User does not have any of the necessary access rights.',
        ),
        'redirect' => 
        array (
          'url' => '/home',
          'message' => 
          array (
            'key' => 'error',
            'content' => '',
          ),
        ),
      ),
    ),
    'teams' => 
    array (
      'enabled' => false,
      'strict_check' => false,
    ),
    'permissions_as_gates' => false,
    'panel' => 
    array (
      'register' => false,
      'domain' => NULL,
      'path' => 'laratrust',
      'go_back_route' => '/',
      'middleware' => 
      array (
        0 => 'web',
      ),
      'assign_permissions_to_user' => true,
      'create_permissions' => true,
      'roles_restrictions' => 
      array (
        'not_removable' => 
        array (
        ),
        'not_editable' => 
        array (
        ),
        'not_deletable' => 
        array (
        ),
      ),
    ),
  ),
  'laravel-translatable-string-exporter' => 
  array (
    'directories' => 
    array (
      0 => 'app',
      1 => 'resources',
      2 => 'database/seeders',
    ),
    'excluded-directories' => 
    array (
    ),
    'patterns' => 
    array (
      0 => '*.php',
      1 => '*.js',
    ),
    'allow-newlines' => false,
    'functions' => 
    array (
      0 => '__',
      1 => '_t',
      2 => '@lang',
    ),
    'sort-keys' => false,
    'add-persistent-strings-to-translations' => false,
    'exclude-translation-keys' => false,
    'put-untranslated-strings-at-the-top' => false,
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => 
    array (
      'channel' => 'null',
      'trace' => false,
    ),
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
        'path' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/logs/laravel.log',
        'level' => 'debug',
        'replace_placeholders' => true,
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
        'replace_placeholders' => true,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
        'replace_placeholders' => true,
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
          'connectionString' => 'tls://:',
        ),
        'processors' => 
        array (
          0 => 'Monolog\\Processor\\PsrLogMessageProcessor',
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
        'processors' => 
        array (
          0 => 'Monolog\\Processor\\PsrLogMessageProcessor',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
        'facility' => 8,
        'replace_placeholders' => true,
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
        'replace_placeholders' => true,
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/logs/laravel.log',
      ),
      'PayTabs' => 
      array (
        'driver' => 'single',
        'path' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/logs/paytabs.log',
        'level' => 'info',
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
        'url' => NULL,
        'host' => 'smtp.mailtrap.io',
        'port' => '2525',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'local_domain' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
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
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/resources/views/vendor/mail',
      ),
    ),
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/stubs/workdo-stubs',
      'files' => 
      array (
        'seeders/PermissionTableSeeder' => 'Database/Seeders/PermissionTableSeeder.php',
        'seeders/MarketPlaceSeederTableSeeder' => 'Database/Seeders/MarketPlaceSeederTableSeeder.php',
        'http/controllers/company/settingscontroller' => 'Http/Controllers/Company/SettingsController.php',
        'http/controllers/superadmin/settingscontroller' => 'Http/Controllers/SuperAdmin/SettingsController.php',
        'listener/companymenu' => 'Listeners/CompanyMenuListener.php',
        'listener/companysetting' => 'Listeners/CompanySettingListener.php',
        'listener/companysettingmenu' => 'Listeners/CompanySettingMenuListener.php',
        'listener/superadminmenu' => 'Listeners/SuperAdminMenuListener.php',
        'listener/superadminsetting' => 'Listeners/SuperAdminSettingListener.php',
        'listener/superadminsettingmenu' => 'Listeners/SuperAdminSettingMenuListener.php',
        'providers/eventserviceprovider' => 'Providers/EventServiceProvider.php',
        'routes/web' => 'Routes/web.php',
        'routes/api' => 'Routes/api.php',
        'views/company/settings/index' => 'Resources/views/company/settings/index.blade.php',
        'views/super-admin/settings/index' => 'Resources/views/super-admin/settings/index.blade.php',
        'views/marketplace/index' => 'Resources/views/marketplace/index.blade.php',
        'views/index' => 'Resources/views/index.blade.php',
        'views/master' => 'Resources/views/layouts/master.blade.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
        'package' => 'package.json',
      ),
      'replacements' => 
      array (
        'seeders/PermissionTableSeeder' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'seeders/MarketPlaceSeederTableSeeder' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'http/controllers/company/settingscontroller' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'http/controllers/superadmin/settingscontroller' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'listener/companymenu' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'listener/companysetting' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'listener/companysettingmenu' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'listener/superadminmenu' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'listener/superadminsetting' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'listener/superadminsettingmenu' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'providers/eventserviceprovider' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'routes/web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'routes/api' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'views/company/settings/index' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'views/super-admin/settings/index' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'views/marketplace/index' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'views/index' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
          6 => 'PROVIDER_NAMESPACE',
        ),
      ),
      'gitkeep' => false,
    ),
    'paths' => 
    array (
      'modules' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/Modules',
      'assets' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/public/modules',
      'migration' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => true,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeders',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'Database/factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Entities',
          'generate' => true,
        ),
        'observer' => 
        array (
          'path' => 'Observers',
          'generate' => true,
        ),
        'routes' => 
        array (
          'path' => 'Routes',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => false,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => false,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => true,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => true,
        ),
        'resource' => 
        array (
          'path' => 'Transformers',
          'generate' => false,
        ),
      ),
    ),
    'commands' => 
    array (
      0 => 'Nwidart\\Modules\\Commands\\CommandMakeCommand',
      1 => 'Nwidart\\Modules\\Commands\\ComponentClassMakeCommand',
      2 => 'Nwidart\\Modules\\Commands\\ComponentViewMakeCommand',
      3 => 'Nwidart\\Modules\\Commands\\ControllerMakeCommand',
      4 => 'Nwidart\\Modules\\Commands\\ChannelMakeCommand',
      5 => 'Nwidart\\Modules\\Commands\\DisableCommand',
      6 => 'Nwidart\\Modules\\Commands\\DumpCommand',
      7 => 'Nwidart\\Modules\\Commands\\EnableCommand',
      8 => 'Nwidart\\Modules\\Commands\\EventMakeCommand',
      9 => 'Nwidart\\Modules\\Commands\\FactoryMakeCommand',
      10 => 'Nwidart\\Modules\\Commands\\JobMakeCommand',
      11 => 'Nwidart\\Modules\\Commands\\ListenerMakeCommand',
      12 => 'Nwidart\\Modules\\Commands\\MailMakeCommand',
      13 => 'Nwidart\\Modules\\Commands\\MiddlewareMakeCommand',
      14 => 'Nwidart\\Modules\\Commands\\NotificationMakeCommand',
      15 => 'Nwidart\\Modules\\Commands\\ObserverMakeCommand',
      16 => 'Nwidart\\Modules\\Commands\\PolicyMakeCommand',
      17 => 'Nwidart\\Modules\\Commands\\ProviderMakeCommand',
      18 => 'Nwidart\\Modules\\Commands\\InstallCommand',
      19 => 'Nwidart\\Modules\\Commands\\LaravelModulesV6Migrator',
      20 => 'Nwidart\\Modules\\Commands\\ListCommand',
      21 => 'Nwidart\\Modules\\Commands\\ModuleDeleteCommand',
      22 => 'Nwidart\\Modules\\Commands\\ModuleMakeCommand',
      23 => 'Nwidart\\Modules\\Commands\\MigrateCommand',
      24 => 'Nwidart\\Modules\\Commands\\MigrateFreshCommand',
      25 => 'Nwidart\\Modules\\Commands\\MigrateRefreshCommand',
      26 => 'Nwidart\\Modules\\Commands\\MigrateResetCommand',
      27 => 'Nwidart\\Modules\\Commands\\MigrateRollbackCommand',
      28 => 'Nwidart\\Modules\\Commands\\MigrateStatusCommand',
      29 => 'Nwidart\\Modules\\Commands\\MigrationMakeCommand',
      30 => 'Nwidart\\Modules\\Commands\\ModelMakeCommand',
      31 => 'Nwidart\\Modules\\Commands\\ResourceMakeCommand',
      32 => 'Nwidart\\Modules\\Commands\\RequestMakeCommand',
      33 => 'Nwidart\\Modules\\Commands\\RuleMakeCommand',
      34 => 'Nwidart\\Modules\\Commands\\RouteProviderMakeCommand',
      35 => 'Nwidart\\Modules\\Commands\\PublishCommand',
      36 => 'Nwidart\\Modules\\Commands\\PublishConfigurationCommand',
      37 => 'Nwidart\\Modules\\Commands\\PublishMigrationCommand',
      38 => 'Nwidart\\Modules\\Commands\\PublishTranslationCommand',
      39 => 'Nwidart\\Modules\\Commands\\SeedCommand',
      40 => 'Nwidart\\Modules\\Commands\\SeedMakeCommand',
      41 => 'Nwidart\\Modules\\Commands\\SetupCommand',
      42 => 'Nwidart\\Modules\\Commands\\TestMakeCommand',
      43 => 'Nwidart\\Modules\\Commands\\UnUseCommand',
      44 => 'Nwidart\\Modules\\Commands\\UpdateCommand',
      45 => 'Nwidart\\Modules\\Commands\\UseCommand',
    ),
    'scan' => 
    array (
      'enabled' => false,
      'paths' => 
      array (
        0 => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/vendor/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'workdo',
      'author' => 
      array (
        'name' => 'WorkDo',
        'email' => 'support@workdo.io',
      ),
      'composer-output' => false,
    ),
    'cache' => 
    array (
      'enabled' => false,
      'driver' => 'file',
      'key' => 'laravel-modules',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
    'activators' => 
    array (
      'file' => 
      array (
        'class' => 'Nwidart\\Modules\\Activators\\FileActivator',
        'statuses-file' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/modules_statuses.json',
        'cache-key' => 'activator.installed',
        'cache-lifetime' => 604800,
      ),
    ),
    'activator' => 'file',
  ),
  'queue' => 
  array (
    'default' => 'sync',
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
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => NULL,
        'secret' => NULL,
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'batching' => 
    array (
      'database' => 'mysql',
      'table' => 'job_batches',
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'localhost',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'token_prefix' => '',
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
      'scheme' => 'https',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'cashfree' => 
    array (
      'key' => '',
      'secret' => '',
      'url' => 'https://sandbox.cashfree.com/pg/orders',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'vidygxp_erp_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'timezones' => 
  array (
    'America/Adak' => '(GMT-10:00) America/Adak (Hawaii-Aleutian Standard Time)',
    'America/Atka' => '(GMT-10:00) America/Atka (Hawaii-Aleutian Standard Time)',
    'America/Anchorage' => '(GMT-9:00) America/Anchorage (Alaska Standard Time)',
    'America/Juneau' => '(GMT-9:00) America/Juneau (Alaska Standard Time)',
    'America/Nome' => '(GMT-9:00) America/Nome (Alaska Standard Time)',
    'America/Yakutat' => '(GMT-9:00) America/Yakutat (Alaska Standard Time)',
    'America/Dawson' => '(GMT-8:00) America/Dawson (Pacific Standard Time)',
    'America/Ensenada' => '(GMT-8:00) America/Ensenada (Pacific Standard Time)',
    'America/Los_Angeles' => '(GMT-8:00) America/Los_Angeles (Pacific Standard Time)',
    'America/Tijuana' => '(GMT-8:00) America/Tijuana (Pacific Standard Time)',
    'America/Vancouver' => '(GMT-8:00) America/Vancouver (Pacific Standard Time)',
    'America/Whitehorse' => '(GMT-8:00) America/Whitehorse (Pacific Standard Time)',
    'Canada/Pacific' => '(GMT-8:00) Canada/Pacific (Pacific Standard Time)',
    'Canada/Yukon' => '(GMT-8:00) Canada/Yukon (Pacific Standard Time)',
    'Mexico/BajaNorte' => '(GMT-8:00) Mexico/BajaNorte (Pacific Standard Time)',
    'America/Boise' => '(GMT-7:00) America/Boise (Mountain Standard Time)',
    'America/Cambridge_Bay' => '(GMT-7:00) America/Cambridge_Bay (Mountain Standard Time)',
    'America/Chihuahua' => '(GMT-7:00) America/Chihuahua (Mountain Standard Time)',
    'America/Dawson_Creek' => '(GMT-7:00) America/Dawson_Creek (Mountain Standard Time)',
    'America/Denver' => '(GMT-7:00) America/Denver (Mountain Standard Time)',
    'America/Edmonton' => '(GMT-7:00) America/Edmonton (Mountain Standard Time)',
    'America/Hermosillo' => '(GMT-7:00) America/Hermosillo (Mountain Standard Time)',
    'America/Inuvik' => '(GMT-7:00) America/Inuvik (Mountain Standard Time)',
    'America/Mazatlan' => '(GMT-7:00) America/Mazatlan (Mountain Standard Time)',
    'America/Phoenix' => '(GMT-7:00) America/Phoenix (Mountain Standard Time)',
    'America/Shiprock' => '(GMT-7:00) America/Shiprock (Mountain Standard Time)',
    'America/Yellowknife' => '(GMT-7:00) America/Yellowknife (Mountain Standard Time)',
    'Canada/Mountain' => '(GMT-7:00) Canada/Mountain (Mountain Standard Time)',
    'Mexico/BajaSur' => '(GMT-7:00) Mexico/BajaSur (Mountain Standard Time)',
    'America/Belize' => '(GMT-6:00) America/Belize (Central Standard Time)',
    'America/Cancun' => '(GMT-6:00) America/Cancun (Central Standard Time)',
    'America/Chicago' => '(GMT-6:00) America/Chicago (Central Standard Time)',
    'America/Costa_Rica' => '(GMT-6:00) America/Costa_Rica (Central Standard Time)',
    'America/El_Salvador' => '(GMT-6:00) America/El_Salvador (Central Standard Time)',
    'America/Guatemala' => '(GMT-6:00) America/Guatemala (Central Standard Time)',
    'America/Knox_IN' => '(GMT-6:00) America/Knox_IN (Central Standard Time)',
    'America/Managua' => '(GMT-6:00) America/Managua (Central Standard Time)',
    'America/Menominee' => '(GMT-6:00) America/Menominee (Central Standard Time)',
    'America/Merida' => '(GMT-6:00) America/Merida (Central Standard Time)',
    'America/Mexico_City' => '(GMT-6:00) America/Mexico_City (Central Standard Time)',
    'America/Monterrey' => '(GMT-6:00) America/Monterrey (Central Standard Time)',
    'America/Rainy_River' => '(GMT-6:00) America/Rainy_River (Central Standard Time)',
    'America/Rankin_Inlet' => '(GMT-6:00) America/Rankin_Inlet (Central Standard Time)',
    'America/Regina' => '(GMT-6:00) America/Regina (Central Standard Time)',
    'America/Swift_Current' => '(GMT-6:00) America/Swift_Current (Central Standard Time)',
    'America/Tegucigalpa' => '(GMT-6:00) America/Tegucigalpa (Central Standard Time)',
    'America/Winnipeg' => '(GMT-6:00) America/Winnipeg (Central Standard Time)',
    'Canada/Central' => '(GMT-6:00) Canada/Central (Central Standard Time)',
    'Canada/East-Saskatchewan' => '(GMT-6:00) Canada/East-Saskatchewan (Central Standard Time)',
    'Canada/Saskatchewan' => '(GMT-6:00) Canada/Saskatchewan (Central Standard Time)',
    'Chile/EasterIsland' => '(GMT-6:00) Chile/EasterIsland (Easter Is. Time)',
    'Mexico/General' => '(GMT-6:00) Mexico/General (Central Standard Time)',
    'America/Atikokan' => '(GMT-5:00) America/Atikokan (Eastern Standard Time)',
    'America/Bogota' => '(GMT-5:00) America/Bogota (Colombia Time)',
    'America/Cayman' => '(GMT-5:00) America/Cayman (Eastern Standard Time)',
    'America/Coral_Harbour' => '(GMT-5:00) America/Coral_Harbour (Eastern Standard Time)',
    'America/Detroit' => '(GMT-5:00) America/Detroit (Eastern Standard Time)',
    'America/Fort_Wayne' => '(GMT-5:00) America/Fort_Wayne (Eastern Standard Time)',
    'America/Grand_Turk' => '(GMT-5:00) America/Grand_Turk (Eastern Standard Time)',
    'America/Guayaquil' => '(GMT-5:00) America/Guayaquil (Ecuador Time)',
    'America/Havana' => '(GMT-5:00) America/Havana (Cuba Standard Time)',
    'America/Indianapolis' => '(GMT-5:00) America/Indianapolis (Eastern Standard Time)',
    'America/Iqaluit' => '(GMT-5:00) America/Iqaluit (Eastern Standard Time)',
    'America/Jamaica' => '(GMT-5:00) America/Jamaica (Eastern Standard Time)',
    'America/Lima' => '(GMT-5:00) America/Lima (Peru Time)',
    'America/Louisville' => '(GMT-5:00) America/Louisville (Eastern Standard Time)',
    'America/Montreal' => '(GMT-5:00) America/Montreal (Eastern Standard Time)',
    'America/Nassau' => '(GMT-5:00) America/Nassau (Eastern Standard Time)',
    'America/New_York' => '(GMT-5:00) America/New_York (Eastern Standard Time)',
    'America/Nipigon' => '(GMT-5:00) America/Nipigon (Eastern Standard Time)',
    'America/Panama' => '(GMT-5:00) America/Panama (Eastern Standard Time)',
    'America/Pangnirtung' => '(GMT-5:00) America/Pangnirtung (Eastern Standard Time)',
    'America/Port-au-Prince' => '(GMT-5:00) America/Port-au-Prince (Eastern Standard Time)',
    'America/Resolute' => '(GMT-5:00) America/Resolute (Eastern Standard Time)',
    'America/Thunder_Bay' => '(GMT-5:00) America/Thunder_Bay (Eastern Standard Time)',
    'America/Toronto' => '(GMT-5:00) America/Toronto (Eastern Standard Time)',
    'Canada/Eastern' => '(GMT-5:00) Canada/Eastern (Eastern Standard Time)',
    'America/Caracas' => '(GMT-4:-30) America/Caracas (Venezuela Time)',
    'America/Anguilla' => '(GMT-4:00) America/Anguilla (Atlantic Standard Time)',
    'America/Antigua' => '(GMT-4:00) America/Antigua (Atlantic Standard Time)',
    'America/Aruba' => '(GMT-4:00) America/Aruba (Atlantic Standard Time)',
    'America/Asuncion' => '(GMT-4:00) America/Asuncion (Paraguay Time)',
    'America/Barbados' => '(GMT-4:00) America/Barbados (Atlantic Standard Time)',
    'America/Blanc-Sablon' => '(GMT-4:00) America/Blanc-Sablon (Atlantic Standard Time)',
    'America/Boa_Vista' => '(GMT-4:00) America/Boa_Vista (Amazon Time)',
    'America/Campo_Grande' => '(GMT-4:00) America/Campo_Grande (Amazon Time)',
    'America/Cuiaba' => '(GMT-4:00) America/Cuiaba (Amazon Time)',
    'America/Curacao' => '(GMT-4:00) America/Curacao (Atlantic Standard Time)',
    'America/Dominica' => '(GMT-4:00) America/Dominica (Atlantic Standard Time)',
    'America/Eirunepe' => '(GMT-4:00) America/Eirunepe (Amazon Time)',
    'America/Glace_Bay' => '(GMT-4:00) America/Glace_Bay (Atlantic Standard Time)',
    'America/Goose_Bay' => '(GMT-4:00) America/Goose_Bay (Atlantic Standard Time)',
    'America/Grenada' => '(GMT-4:00) America/Grenada (Atlantic Standard Time)',
    'America/Guadeloupe' => '(GMT-4:00) America/Guadeloupe (Atlantic Standard Time)',
    'America/Guyana' => '(GMT-4:00) America/Guyana (Guyana Time)',
    'America/Halifax' => '(GMT-4:00) America/Halifax (Atlantic Standard Time)',
    'America/La_Paz' => '(GMT-4:00) America/La_Paz (Bolivia Time)',
    'America/Manaus' => '(GMT-4:00) America/Manaus (Amazon Time)',
    'America/Marigot' => '(GMT-4:00) America/Marigot (Atlantic Standard Time)',
    'America/Martinique' => '(GMT-4:00) America/Martinique (Atlantic Standard Time)',
    'America/Moncton' => '(GMT-4:00) America/Moncton (Atlantic Standard Time)',
    'America/Montserrat' => '(GMT-4:00) America/Montserrat (Atlantic Standard Time)',
    'America/Port_of_Spain' => '(GMT-4:00) America/Port_of_Spain (Atlantic Standard Time)',
    'America/Porto_Acre' => '(GMT-4:00) America/Porto_Acre (Amazon Time)',
    'America/Porto_Velho' => '(GMT-4:00) America/Porto_Velho (Amazon Time)',
    'America/Puerto_Rico' => '(GMT-4:00) America/Puerto_Rico (Atlantic Standard Time)',
    'America/Rio_Branco' => '(GMT-4:00) America/Rio_Branco (Amazon Time)',
    'America/Santiago' => '(GMT-4:00) America/Santiago (Chile Time)',
    'America/Santo_Domingo' => '(GMT-4:00) America/Santo_Domingo (Atlantic Standard Time)',
    'America/St_Barthelemy' => '(GMT-4:00) America/St_Barthelemy (Atlantic Standard Time)',
    'America/St_Kitts' => '(GMT-4:00) America/St_Kitts (Atlantic Standard Time)',
    'America/St_Lucia' => '(GMT-4:00) America/St_Lucia (Atlantic Standard Time)',
    'America/St_Thomas' => '(GMT-4:00) America/St_Thomas (Atlantic Standard Time)',
    'America/St_Vincent' => '(GMT-4:00) America/St_Vincent (Atlantic Standard Time)',
    'America/Thule' => '(GMT-4:00) America/Thule (Atlantic Standard Time)',
    'America/Tortola' => '(GMT-4:00) America/Tortola (Atlantic Standard Time)',
    'America/Virgin' => '(GMT-4:00) America/Virgin (Atlantic Standard Time)',
    'Antarctica/Palmer' => '(GMT-4:00) Antarctica/Palmer (Chile Time)',
    'Atlantic/Bermuda' => '(GMT-4:00) Atlantic/Bermuda (Atlantic Standard Time)',
    'Atlantic/Stanley' => '(GMT-4:00) Atlantic/Stanley (Falkland Is. Time)',
    'Brazil/Acre' => '(GMT-4:00) Brazil/Acre (Amazon Time)',
    'Brazil/West' => '(GMT-4:00) Brazil/West (Amazon Time)',
    'Canada/Atlantic' => '(GMT-4:00) Canada/Atlantic (Atlantic Standard Time)',
    'Chile/Continental' => '(GMT-4:00) Chile/Continental (Chile Time)',
    'America/St_Johns' => '(GMT-3:-30) America/St_Johns (Newfoundland Standard Time)',
    'Canada/Newfoundland' => '(GMT-3:-30) Canada/Newfoundland (Newfoundland Standard Time)',
    'America/Araguaina' => '(GMT-3:00) America/Araguaina (Brasilia Time)',
    'America/Bahia' => '(GMT-3:00) America/Bahia (Brasilia Time)',
    'America/Belem' => '(GMT-3:00) America/Belem (Brasilia Time)',
    'America/Buenos_Aires' => '(GMT-3:00) America/Buenos_Aires (Argentine Time)',
    'America/Catamarca' => '(GMT-3:00) America/Catamarca (Argentine Time)',
    'America/Cayenne' => '(GMT-3:00) America/Cayenne (French Guiana Time)',
    'America/Cordoba' => '(GMT-3:00) America/Cordoba (Argentine Time)',
    'America/Fortaleza' => '(GMT-3:00) America/Fortaleza (Brasilia Time)',
    'America/Godthab' => '(GMT-3:00) America/Godthab (Western Greenland Time)',
    'America/Jujuy' => '(GMT-3:00) America/Jujuy (Argentine Time)',
    'America/Maceio' => '(GMT-3:00) America/Maceio (Brasilia Time)',
    'America/Mendoza' => '(GMT-3:00) America/Mendoza (Argentine Time)',
    'America/Miquelon' => '(GMT-3:00) America/Miquelon (Pierre & Miquelon Standard Time)',
    'America/Montevideo' => '(GMT-3:00) America/Montevideo (Uruguay Time)',
    'America/Paramaribo' => '(GMT-3:00) America/Paramaribo (Suriname Time)',
    'America/Recife' => '(GMT-3:00) America/Recife (Brasilia Time)',
    'America/Rosario' => '(GMT-3:00) America/Rosario (Argentine Time)',
    'America/Santarem' => '(GMT-3:00) America/Santarem (Brasilia Time)',
    'America/Sao_Paulo' => '(GMT-3:00) America/Sao_Paulo (Brasilia Time)',
    'Antarctica/Rothera' => '(GMT-3:00) Antarctica/Rothera (Rothera Time)',
    'Brazil/East' => '(GMT-3:00) Brazil/East (Brasilia Time)',
    'America/Noronha' => '(GMT-2:00) America/Noronha (Fernando de Noronha Time)',
    'Atlantic/South_Georgia' => '(GMT-2:00) Atlantic/South_Georgia (South Georgia Standard Time)',
    'Brazil/DeNoronha' => '(GMT-2:00) Brazil/DeNoronha (Fernando de Noronha Time)',
    'America/Scoresbysund' => '(GMT-1:00) America/Scoresbysund (Eastern Greenland Time)',
    'Atlantic/Azores' => '(GMT-1:00) Atlantic/Azores (Azores Time)',
    'Atlantic/Cape_Verde' => '(GMT-1:00) Atlantic/Cape_Verde (Cape Verde Time)',
    'Africa/Abidjan' => '(GMT+0:00) Africa/Abidjan (Greenwich Mean Time)',
    'Africa/Accra' => '(GMT+0:00) Africa/Accra (Ghana Mean Time)',
    'Africa/Bamako' => '(GMT+0:00) Africa/Bamako (Greenwich Mean Time)',
    'Africa/Banjul' => '(GMT+0:00) Africa/Banjul (Greenwich Mean Time)',
    'Africa/Bissau' => '(GMT+0:00) Africa/Bissau (Greenwich Mean Time)',
    'Africa/Casablanca' => '(GMT+0:00) Africa/Casablanca (Western European Time)',
    'Africa/Conakry' => '(GMT+0:00) Africa/Conakry (Greenwich Mean Time)',
    'Africa/Dakar' => '(GMT+0:00) Africa/Dakar (Greenwich Mean Time)',
    'Africa/El_Aaiun' => '(GMT+0:00) Africa/El_Aaiun (Western European Time)',
    'Africa/Freetown' => '(GMT+0:00) Africa/Freetown (Greenwich Mean Time)',
    'Africa/Lome' => '(GMT+0:00) Africa/Lome (Greenwich Mean Time)',
    'Africa/Monrovia' => '(GMT+0:00) Africa/Monrovia (Greenwich Mean Time)',
    'Africa/Nouakchott' => '(GMT+0:00) Africa/Nouakchott (Greenwich Mean Time)',
    'Africa/Ouagadougou' => '(GMT+0:00) Africa/Ouagadougou (Greenwich Mean Time)',
    'Africa/Sao_Tome' => '(GMT+0:00) Africa/Sao_Tome (Greenwich Mean Time)',
    'Africa/Timbuktu' => '(GMT+0:00) Africa/Timbuktu (Greenwich Mean Time)',
    'America/Danmarkshavn' => '(GMT+0:00) America/Danmarkshavn (Greenwich Mean Time)',
    'Atlantic/Canary' => '(GMT+0:00) Atlantic/Canary (Western European Time)',
    'Atlantic/Faeroe' => '(GMT+0:00) Atlantic/Faeroe (Western European Time)',
    'Atlantic/Faroe' => '(GMT+0:00) Atlantic/Faroe (Western European Time)',
    'Atlantic/Madeira' => '(GMT+0:00) Atlantic/Madeira (Western European Time)',
    'Atlantic/Reykjavik' => '(GMT+0:00) Atlantic/Reykjavik (Greenwich Mean Time)',
    'Atlantic/St_Helena' => '(GMT+0:00) Atlantic/St_Helena (Greenwich Mean Time)',
    'Europe/Belfast' => '(GMT+0:00) Europe/Belfast (Greenwich Mean Time)',
    'Europe/Dublin' => '(GMT+0:00) Europe/Dublin (Greenwich Mean Time)',
    'Europe/Guernsey' => '(GMT+0:00) Europe/Guernsey (Greenwich Mean Time)',
    'Europe/Isle_of_Man' => '(GMT+0:00) Europe/Isle_of_Man (Greenwich Mean Time)',
    'Europe/Jersey' => '(GMT+0:00) Europe/Jersey (Greenwich Mean Time)',
    'Europe/Lisbon' => '(GMT+0:00) Europe/Lisbon (Western European Time)',
    'Europe/London' => '(GMT+0:00) Europe/London (Greenwich Mean Time)',
    'Africa/Algiers' => '(GMT+1:00) Africa/Algiers (Central European Time)',
    'Africa/Bangui' => '(GMT+1:00) Africa/Bangui (Western African Time)',
    'Africa/Brazzaville' => '(GMT+1:00) Africa/Brazzaville (Western African Time)',
    'Africa/Ceuta' => '(GMT+1:00) Africa/Ceuta (Central European Time)',
    'Africa/Douala' => '(GMT+1:00) Africa/Douala (Western African Time)',
    'Africa/Kinshasa' => '(GMT+1:00) Africa/Kinshasa (Western African Time)',
    'Africa/Lagos' => '(GMT+1:00) Africa/Lagos (Western African Time)',
    'Africa/Libreville' => '(GMT+1:00) Africa/Libreville (Western African Time)',
    'Africa/Luanda' => '(GMT+1:00) Africa/Luanda (Western African Time)',
    'Africa/Malabo' => '(GMT+1:00) Africa/Malabo (Western African Time)',
    'Africa/Ndjamena' => '(GMT+1:00) Africa/Ndjamena (Western African Time)',
    'Africa/Niamey' => '(GMT+1:00) Africa/Niamey (Western African Time)',
    'Africa/Porto-Novo' => '(GMT+1:00) Africa/Porto-Novo (Western African Time)',
    'Africa/Tunis' => '(GMT+1:00) Africa/Tunis (Central European Time)',
    'Africa/Windhoek' => '(GMT+1:00) Africa/Windhoek (Western African Time)',
    'Arctic/Longyearbyen' => '(GMT+1:00) Arctic/Longyearbyen (Central European Time)',
    'Atlantic/Jan_Mayen' => '(GMT+1:00) Atlantic/Jan_Mayen (Central European Time)',
    'Europe/Amsterdam' => '(GMT+1:00) Europe/Amsterdam (Central European Time)',
    'Europe/Andorra' => '(GMT+1:00) Europe/Andorra (Central European Time)',
    'Europe/Belgrade' => '(GMT+1:00) Europe/Belgrade (Central European Time)',
    'Europe/Berlin' => '(GMT+1:00) Europe/Berlin (Central European Time)',
    'Europe/Bratislava' => '(GMT+1:00) Europe/Bratislava (Central European Time)',
    'Europe/Brussels' => '(GMT+1:00) Europe/Brussels (Central European Time)',
    'Europe/Budapest' => '(GMT+1:00) Europe/Budapest (Central European Time)',
    'Europe/Copenhagen' => '(GMT+1:00) Europe/Copenhagen (Central European Time)',
    'Europe/Gibraltar' => '(GMT+1:00) Europe/Gibraltar (Central European Time)',
    'Europe/Ljubljana' => '(GMT+1:00) Europe/Ljubljana (Central European Time)',
    'Europe/Luxembourg' => '(GMT+1:00) Europe/Luxembourg (Central European Time)',
    'Europe/Madrid' => '(GMT+1:00) Europe/Madrid (Central European Time)',
    'Europe/Malta' => '(GMT+1:00) Europe/Malta (Central European Time)',
    'Europe/Monaco' => '(GMT+1:00) Europe/Monaco (Central European Time)',
    'Europe/Oslo' => '(GMT+1:00) Europe/Oslo (Central European Time)',
    'Europe/Paris' => '(GMT+1:00) Europe/Paris (Central European Time)',
    'Europe/Podgorica' => '(GMT+1:00) Europe/Podgorica (Central European Time)',
    'Europe/Prague' => '(GMT+1:00) Europe/Prague (Central European Time)',
    'Europe/Rome' => '(GMT+1:00) Europe/Rome (Central European Time)',
    'Europe/San_Marino' => '(GMT+1:00) Europe/San_Marino (Central European Time)',
    'Europe/Sarajevo' => '(GMT+1:00) Europe/Sarajevo (Central European Time)',
    'Europe/Skopje' => '(GMT+1:00) Europe/Skopje (Central European Time)',
    'Europe/Stockholm' => '(GMT+1:00) Europe/Stockholm (Central European Time)',
    'Europe/Tirane' => '(GMT+1:00) Europe/Tirane (Central European Time)',
    'Europe/Vaduz' => '(GMT+1:00) Europe/Vaduz (Central European Time)',
    'Europe/Vatican' => '(GMT+1:00) Europe/Vatican (Central European Time)',
    'Europe/Vienna' => '(GMT+1:00) Europe/Vienna (Central European Time)',
    'Europe/Warsaw' => '(GMT+1:00) Europe/Warsaw (Central European Time)',
    'Europe/Zagreb' => '(GMT+1:00) Europe/Zagreb (Central European Time)',
    'Europe/Zurich' => '(GMT+1:00) Europe/Zurich (Central European Time)',
    'Africa/Blantyre' => '(GMT+2:00) Africa/Blantyre (Central African Time)',
    'Africa/Bujumbura' => '(GMT+2:00) Africa/Bujumbura (Central African Time)',
    'Africa/Cairo' => '(GMT+2:00) Africa/Cairo (Eastern European Time)',
    'Africa/Gaborone' => '(GMT+2:00) Africa/Gaborone (Central African Time)',
    'Africa/Harare' => '(GMT+2:00) Africa/Harare (Central African Time)',
    'Africa/Johannesburg' => '(GMT+2:00) Africa/Johannesburg (South Africa Standard Time)',
    'Africa/Kigali' => '(GMT+2:00) Africa/Kigali (Central African Time)',
    'Africa/Lubumbashi' => '(GMT+2:00) Africa/Lubumbashi (Central African Time)',
    'Africa/Lusaka' => '(GMT+2:00) Africa/Lusaka (Central African Time)',
    'Africa/Maputo' => '(GMT+2:00) Africa/Maputo (Central African Time)',
    'Africa/Maseru' => '(GMT+2:00) Africa/Maseru (South Africa Standard Time)',
    'Africa/Mbabane' => '(GMT+2:00) Africa/Mbabane (South Africa Standard Time)',
    'Africa/Tripoli' => '(GMT+2:00) Africa/Tripoli (Eastern European Time)',
    'Asia/Amman' => '(GMT+2:00) Asia/Amman (Eastern European Time)',
    'Asia/Beirut' => '(GMT+2:00) Asia/Beirut (Eastern European Time)',
    'Asia/Damascus' => '(GMT+2:00) Asia/Damascus (Eastern European Time)',
    'Asia/Gaza' => '(GMT+2:00) Asia/Gaza (Eastern European Time)',
    'Asia/Istanbul' => '(GMT+2:00) Asia/Istanbul (Eastern European Time)',
    'Asia/Jerusalem' => '(GMT+2:00) Asia/Jerusalem (Israel Standard Time)',
    'Asia/Nicosia' => '(GMT+2:00) Asia/Nicosia (Eastern European Time)',
    'Asia/Tel_Aviv' => '(GMT+2:00) Asia/Tel_Aviv (Israel Standard Time)',
    'Europe/Athens' => '(GMT+2:00) Europe/Athens (Eastern European Time)',
    'Europe/Bucharest' => '(GMT+2:00) Europe/Bucharest (Eastern European Time)',
    'Europe/Chisinau' => '(GMT+2:00) Europe/Chisinau (Eastern European Time)',
    'Europe/Helsinki' => '(GMT+2:00) Europe/Helsinki (Eastern European Time)',
    'Europe/Istanbul' => '(GMT+2:00) Europe/Istanbul (Eastern European Time)',
    'Europe/Kaliningrad' => '(GMT+2:00) Europe/Kaliningrad (Eastern European Time)',
    'Europe/Kiev' => '(GMT+2:00) Europe/Kiev (Eastern European Time)',
    'Europe/Mariehamn' => '(GMT+2:00) Europe/Mariehamn (Eastern European Time)',
    'Europe/Minsk' => '(GMT+2:00) Europe/Minsk (Eastern European Time)',
    'Europe/Nicosia' => '(GMT+2:00) Europe/Nicosia (Eastern European Time)',
    'Europe/Riga' => '(GMT+2:00) Europe/Riga (Eastern European Time)',
    'Europe/Simferopol' => '(GMT+2:00) Europe/Simferopol (Eastern European Time)',
    'Europe/Sofia' => '(GMT+2:00) Europe/Sofia (Eastern European Time)',
    'Europe/Tallinn' => '(GMT+2:00) Europe/Tallinn (Eastern European Time)',
    'Europe/Tiraspol' => '(GMT+2:00) Europe/Tiraspol (Eastern European Time)',
    'Europe/Uzhgorod' => '(GMT+2:00) Europe/Uzhgorod (Eastern European Time)',
    'Europe/Vilnius' => '(GMT+2:00) Europe/Vilnius (Eastern European Time)',
    'Europe/Zaporozhye' => '(GMT+2:00) Europe/Zaporozhye (Eastern European Time)',
    'Africa/Addis_Ababa' => '(GMT+3:00) Africa/Addis_Ababa (Eastern African Time)',
    'Africa/Asmara' => '(GMT+3:00) Africa/Asmara (Eastern African Time)',
    'Africa/Asmera' => '(GMT+3:00) Africa/Asmera (Eastern African Time)',
    'Africa/Dar_es_Salaam' => '(GMT+3:00) Africa/Dar_es_Salaam (Eastern African Time)',
    'Africa/Djibouti' => '(GMT+3:00) Africa/Djibouti (Eastern African Time)',
    'Africa/Kampala' => '(GMT+3:00) Africa/Kampala (Eastern African Time)',
    'Africa/Khartoum' => '(GMT+3:00) Africa/Khartoum (Eastern African Time)',
    'Africa/Mogadishu' => '(GMT+3:00) Africa/Mogadishu (Eastern African Time)',
    'Africa/Nairobi' => '(GMT+3:00) Africa/Nairobi (Eastern African Time)',
    'Antarctica/Syowa' => '(GMT+3:00) Antarctica/Syowa (Syowa Time)',
    'Asia/Aden' => '(GMT+3:00) Asia/Aden (Arabia Standard Time)',
    'Asia/Baghdad' => '(GMT+3:00) Asia/Baghdad (Arabia Standard Time)',
    'Asia/Bahrain' => '(GMT+3:00) Asia/Bahrain (Arabia Standard Time)',
    'Asia/Kuwait' => '(GMT+3:00) Asia/Kuwait (Arabia Standard Time)',
    'Asia/Qatar' => '(GMT+3:00) Asia/Qatar (Arabia Standard Time)',
    'Europe/Moscow' => '(GMT+3:00) Europe/Moscow (Moscow Standard Time)',
    'Europe/Volgograd' => '(GMT+3:00) Europe/Volgograd (Volgograd Time)',
    'Indian/Antananarivo' => '(GMT+3:00) Indian/Antananarivo (Eastern African Time)',
    'Indian/Comoro' => '(GMT+3:00) Indian/Comoro (Eastern African Time)',
    'Indian/Mayotte' => '(GMT+3:00) Indian/Mayotte (Eastern African Time)',
    'Asia/Tehran' => '(GMT+3:30) Asia/Tehran (Iran Standard Time)',
    'Asia/Baku' => '(GMT+4:00) Asia/Baku (Azerbaijan Time)',
    'Asia/Dubai' => '(GMT+4:00) Asia/Dubai (Gulf Standard Time)',
    'Asia/Muscat' => '(GMT+4:00) Asia/Muscat (Gulf Standard Time)',
    'Asia/Tbilisi' => '(GMT+4:00) Asia/Tbilisi (Georgia Time)',
    'Asia/Yerevan' => '(GMT+4:00) Asia/Yerevan (Armenia Time)',
    'Europe/Samara' => '(GMT+4:00) Europe/Samara (Samara Time)',
    'Indian/Mahe' => '(GMT+4:00) Indian/Mahe (Seychelles Time)',
    'Indian/Mauritius' => '(GMT+4:00) Indian/Mauritius (Mauritius Time)',
    'Indian/Reunion' => '(GMT+4:00) Indian/Reunion (Reunion Time)',
    'Asia/Kabul' => '(GMT+4:30) Asia/Kabul (Afghanistan Time)',
    'Asia/Aqtau' => '(GMT+5:00) Asia/Aqtau (Aqtau Time)',
    'Asia/Aqtobe' => '(GMT+5:00) Asia/Aqtobe (Aqtobe Time)',
    'Asia/Ashgabat' => '(GMT+5:00) Asia/Ashgabat (Turkmenistan Time)',
    'Asia/Ashkhabad' => '(GMT+5:00) Asia/Ashkhabad (Turkmenistan Time)',
    'Asia/Dushanbe' => '(GMT+5:00) Asia/Dushanbe (Tajikistan Time)',
    'Asia/Karachi' => '(GMT+5:00) Asia/Karachi (Pakistan Time)',
    'Asia/Oral' => '(GMT+5:00) Asia/Oral (Oral Time)',
    'Asia/Samarkand' => '(GMT+5:00) Asia/Samarkand (Uzbekistan Time)',
    'Asia/Tashkent' => '(GMT+5:00) Asia/Tashkent (Uzbekistan Time)',
    'Asia/Yekaterinburg' => '(GMT+5:00) Asia/Yekaterinburg (Yekaterinburg Time)',
    'Indian/Kerguelen' => '(GMT+5:00) Indian/Kerguelen (French Southern & Antarctic Lands Time)',
    'Indian/Maldives' => '(GMT+5:00) Indian/Maldives (Maldives Time)',
    'Asia/Calcutta' => '(GMT+5:30) Asia/Calcutta (India Standard Time)',
    'Asia/Colombo' => '(GMT+5:30) Asia/Colombo (India Standard Time)',
    'Asia/Kolkata' => '(GMT+5:30) Asia/Kolkata (India Standard Time)',
    'Asia/Katmandu' => '(GMT+5:45) Asia/Katmandu (Nepal Time)',
    'Antarctica/Mawson' => '(GMT+6:00) Antarctica/Mawson (Mawson Time)',
    'Antarctica/Vostok' => '(GMT+6:00) Antarctica/Vostok (Vostok Time)',
    'Asia/Almaty' => '(GMT+6:00) Asia/Almaty (Alma-Ata Time)',
    'Asia/Bishkek' => '(GMT+6:00) Asia/Bishkek (Kirgizstan Time)',
    'Asia/Dacca' => '(GMT+6:00) Asia/Dacca (Bangladesh Time)',
    'Asia/Dhaka' => '(GMT+6:00) Asia/Dhaka (Bangladesh Time)',
    'Asia/Novosibirsk' => '(GMT+6:00) Asia/Novosibirsk (Novosibirsk Time)',
    'Asia/Omsk' => '(GMT+6:00) Asia/Omsk (Omsk Time)',
    'Asia/Qyzylorda' => '(GMT+6:00) Asia/Qyzylorda (Qyzylorda Time)',
    'Asia/Thimbu' => '(GMT+6:00) Asia/Thimbu (Bhutan Time)',
    'Asia/Thimphu' => '(GMT+6:00) Asia/Thimphu (Bhutan Time)',
    'Indian/Chagos' => '(GMT+6:00) Indian/Chagos (Indian Ocean Territory Time)',
    'Asia/Rangoon' => '(GMT+6:30) Asia/Rangoon (Myanmar Time)',
    'Indian/Cocos' => '(GMT+6:30) Indian/Cocos (Cocos Islands Time)',
    'Antarctica/Davis' => '(GMT+7:00) Antarctica/Davis (Davis Time)',
    'Asia/Bangkok' => '(GMT+7:00) Asia/Bangkok (Indochina Time)',
    'Asia/Ho_Chi_Minh' => '(GMT+7:00) Asia/Ho_Chi_Minh (Indochina Time)',
    'Asia/Hovd' => '(GMT+7:00) Asia/Hovd (Hovd Time)',
    'Asia/Jakarta' => '(GMT+7:00) Asia/Jakarta (West Indonesia Time)',
    'Asia/Krasnoyarsk' => '(GMT+7:00) Asia/Krasnoyarsk (Krasnoyarsk Time)',
    'Asia/Phnom_Penh' => '(GMT+7:00) Asia/Phnom_Penh (Indochina Time)',
    'Asia/Pontianak' => '(GMT+7:00) Asia/Pontianak (West Indonesia Time)',
    'Asia/Saigon' => '(GMT+7:00) Asia/Saigon (Indochina Time)',
    'Asia/Vientiane' => '(GMT+7:00) Asia/Vientiane (Indochina Time)',
    'Indian/Christmas' => '(GMT+7:00) Indian/Christmas (Christmas Island Time)',
    'Antarctica/Casey' => '(GMT+8:00) Antarctica/Casey (Western Standard Time (Australia))',
    'Asia/Brunei' => '(GMT+8:00) Asia/Brunei (Brunei Time)',
    'Asia/Choibalsan' => '(GMT+8:00) Asia/Choibalsan (Choibalsan Time)',
    'Asia/Chongqing' => '(GMT+8:00) Asia/Chongqing (China Standard Time)',
    'Asia/Chungking' => '(GMT+8:00) Asia/Chungking (China Standard Time)',
    'Asia/Harbin' => '(GMT+8:00) Asia/Harbin (China Standard Time)',
    'Asia/Hong_Kong' => '(GMT+8:00) Asia/Hong_Kong (Hong Kong Time)',
    'Asia/Irkutsk' => '(GMT+8:00) Asia/Irkutsk (Irkutsk Time)',
    'Asia/Kashgar' => '(GMT+8:00) Asia/Kashgar (China Standard Time)',
    'Asia/Kuala_Lumpur' => '(GMT+8:00) Asia/Kuala_Lumpur (Malaysia Time)',
    'Asia/Kuching' => '(GMT+8:00) Asia/Kuching (Malaysia Time)',
    'Asia/Macao' => '(GMT+8:00) Asia/Macao (China Standard Time)',
    'Asia/Macau' => '(GMT+8:00) Asia/Macau (China Standard Time)',
    'Asia/Makassar' => '(GMT+8:00) Asia/Makassar (Central Indonesia Time)',
    'Asia/Manila' => '(GMT+8:00) Asia/Manila (Philippines Time)',
    'Asia/Shanghai' => '(GMT+8:00) Asia/Shanghai (China Standard Time)',
    'Asia/Singapore' => '(GMT+8:00) Asia/Singapore (Singapore Time)',
    'Asia/Taipei' => '(GMT+8:00) Asia/Taipei (China Standard Time)',
    'Asia/Ujung_Pandang' => '(GMT+8:00) Asia/Ujung_Pandang (Central Indonesia Time)',
    'Asia/Ulaanbaatar' => '(GMT+8:00) Asia/Ulaanbaatar (Ulaanbaatar Time)',
    'Asia/Ulan_Bator' => '(GMT+8:00) Asia/Ulan_Bator (Ulaanbaatar Time)',
    'Asia/Urumqi' => '(GMT+8:00) Asia/Urumqi (China Standard Time)',
    'Australia/Perth' => '(GMT+8:00) Australia/Perth (Western Standard Time (Australia))',
    'Australia/West' => '(GMT+8:00) Australia/West (Western Standard Time (Australia))',
    'Australia/Eucla' => '(GMT+8:45) Australia/Eucla (Central Western Standard Time (Australia))',
    'Asia/Dili' => '(GMT+9:00) Asia/Dili (Timor-Leste Time)',
    'Asia/Jayapura' => '(GMT+9:00) Asia/Jayapura (East Indonesia Time)',
    'Asia/Pyongyang' => '(GMT+9:00) Asia/Pyongyang (Korea Standard Time)',
    'Asia/Seoul' => '(GMT+9:00) Asia/Seoul (Korea Standard Time)',
    'Asia/Tokyo' => '(GMT+9:00) Asia/Tokyo (Japan Standard Time)',
    'Asia/Yakutsk' => '(GMT+9:00) Asia/Yakutsk (Yakutsk Time)',
    'Australia/Adelaide' => '(GMT+9:30) Australia/Adelaide (Central Standard Time (South Australia))',
    'Australia/Broken_Hill' => '(GMT+9:30) Australia/Broken_Hill (Central Standard Time (South Australia/New South Wales))',
    'Australia/Darwin' => '(GMT+9:30) Australia/Darwin (Central Standard Time (Northern Territory))',
    'Australia/North' => '(GMT+9:30) Australia/North (Central Standard Time (Northern Territory))',
    'Australia/South' => '(GMT+9:30) Australia/South (Central Standard Time (South Australia))',
    'Australia/Yancowinna' => '(GMT+9:30) Australia/Yancowinna (Central Standard Time (South Australia/New South Wales))',
    'Antarctica/DumontDUrville' => '(GMT+10:00) Antarctica/DumontDUrville (Dumont-d\'Urville Time)',
    'Asia/Sakhalin' => '(GMT+10:00) Asia/Sakhalin (Sakhalin Time)',
    'Asia/Vladivostok' => '(GMT+10:00) Asia/Vladivostok (Vladivostok Time)',
    'Australia/ACT' => '(GMT+10:00) Australia/ACT (Eastern Standard Time (New South Wales))',
    'Australia/Brisbane' => '(GMT+10:00) Australia/Brisbane (Eastern Standard Time (Queensland))',
    'Australia/Canberra' => '(GMT+10:00) Australia/Canberra (Eastern Standard Time (New South Wales))',
    'Australia/Currie' => '(GMT+10:00) Australia/Currie (Eastern Standard Time (New South Wales))',
    'Australia/Hobart' => '(GMT+10:00) Australia/Hobart (Eastern Standard Time (Tasmania))',
    'Australia/Lindeman' => '(GMT+10:00) Australia/Lindeman (Eastern Standard Time (Queensland))',
    'Australia/Melbourne' => '(GMT+10:00) Australia/Melbourne (Eastern Standard Time (Victoria))',
    'Australia/NSW' => '(GMT+10:00) Australia/NSW (Eastern Standard Time (New South Wales))',
    'Australia/Queensland' => '(GMT+10:00) Australia/Queensland (Eastern Standard Time (Queensland))',
    'Australia/Sydney' => '(GMT+10:00) Australia/Sydney (Eastern Standard Time (New South Wales))',
    'Australia/Tasmania' => '(GMT+10:00) Australia/Tasmania (Eastern Standard Time (Tasmania))',
    'Australia/Victoria' => '(GMT+10:00) Australia/Victoria (Eastern Standard Time (Victoria))',
    'Australia/LHI' => '(GMT+10:30) Australia/LHI (Lord Howe Standard Time)',
    'Australia/Lord_Howe' => '(GMT+10:30) Australia/Lord_Howe (Lord Howe Standard Time)',
    'Asia/Magadan' => '(GMT+11:00) Asia/Magadan (Magadan Time)',
    'Antarctica/McMurdo' => '(GMT+12:00) Antarctica/McMurdo (New Zealand Standard Time)',
    'Antarctica/South_Pole' => '(GMT+12:00) Antarctica/South_Pole (New Zealand Standard Time)',
    'Asia/Anadyr' => '(GMT+12:00) Asia/Anadyr (Anadyr Time)',
    'Asia/Kamchatka' => '(GMT+12:00) Asia/Kamchatka (Petropavlovsk-Kamchatski Time)',
  ),
  'verification' => 
  array (
    'system' => 'WorkDo Dash SaaS',
    'system_version' => '4.2',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/resources/views',
    ),
    'compiled' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/framework/views',
  ),
  'box' => 
  array (
    'clientId' => NULL,
    'clientSecret' => NULL,
    'redirectUri' => 'box/oauth',
    'boxLandingUri' => 'box',
    'urlAuthorize' => 'https://account.box.com/api/oauth2/authorize',
    'urlAccessToken' => 'https://www.box.com/api/oauth2/token',
  ),
  'dropbox' => 
  array (
    'clientId' => NULL,
    'clientSecret' => NULL,
    'redirectUri' => NULL,
    'landingUri' => '/',
    'accessToken' => '',
    'accessType' => 'offline',
    'scopes' => 'account_info.read files.metadata.write files.metadata.read files.content.write files.content.read',
  ),
  'laravel-impersonate' => 
  array (
    'session_key' => 'impersonated_by',
    'session_guard' => 'impersonator_guard',
    'session_guard_using' => 'impersonator_guard_using',
    'default_impersonator_guard' => 'web',
    'take_redirect_to' => '/',
    'leave_redirect_to' => '/',
  ),
  'payhere' => 
  array (
    'api_endpoint' => NULL,
    'merchant_id' => NULL,
    'merchant_secret' => NULL,
    'app_id' => NULL,
    'app_secret' => NULL,
  ),
  'cashier' => 
  array (
    'vendor_id' => NULL,
    'vendor_auth_code' => NULL,
    'public_key' => NULL,
    'path' => 'paddle',
    'webhook' => NULL,
    'currency' => 'USD',
    'currency_locale' => 'en',
    'sandbox' => false,
  ),
  'google-calendar' => 
  array (
    'default_auth_profile' => 'service_account',
    'auth_profiles' => 
    array (
      'service_account' => 
      array (
        'credentials_json' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/app/google-calendar/service-account-credentials.json',
      ),
      'oauth' => 
      array (
        'credentials_json' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/app/google-calendar/oauth-credentials.json',
        'token_json' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file/storage/app/google-calendar/oauth-token.json',
      ),
    ),
    'calendar_id' => NULL,
    'user_to_impersonate' => NULL,
  ),
  'flare' => 
  array (
    'key' => NULL,
    'flare_middleware' => 
    array (
      0 => 'Spatie\\FlareClient\\FlareMiddleware\\RemoveRequestIp',
      1 => 'Spatie\\FlareClient\\FlareMiddleware\\AddGitInformation',
      2 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddNotifierName',
      3 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddEnvironmentInformation',
      4 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionInformation',
      5 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddDumps',
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddLogs' => 
      array (
        'maximum_number_of_collected_logs' => 200,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddQueries' => 
      array (
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddJobs' => 
      array (
        'max_chained_job_reporting_depth' => 5,
      ),
      6 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddContext',
      7 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionHandledStatus',
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestBodyFields' => 
      array (
        'censor_fields' => 
        array (
          0 => 'password',
          1 => 'password_confirmation',
        ),
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestHeaders' => 
      array (
        'headers' => 
        array (
          0 => 'API-KEY',
          1 => 'Authorization',
          2 => 'Cookie',
          3 => 'Set-Cookie',
          4 => 'X-CSRF-TOKEN',
          5 => 'X-XSRF-TOKEN',
        ),
      ),
    ),
    'send_logs_as_events' => true,
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'auto',
    'enable_share_button' => true,
    'register_commands' => false,
    'solution_providers' => 
    array (
      0 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\BadMethodCallSolutionProvider',
      1 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\MergeConflictSolutionProvider',
      2 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\UndefinedPropertySolutionProvider',
      3 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\IncorrectValetDbCredentialsSolutionProvider',
      4 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingAppKeySolutionProvider',
      5 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\DefaultDbNameSolutionProvider',
      6 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\TableNotFoundSolutionProvider',
      7 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingImportSolutionProvider',
      8 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\InvalidRouteActionSolutionProvider',
      9 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\ViewNotFoundSolutionProvider',
      10 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\RunningLaravelDuskInProductionProvider',
      11 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingColumnSolutionProvider',
      12 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownValidationSolutionProvider',
      13 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingMixManifestSolutionProvider',
      14 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingViteManifestSolutionProvider',
      15 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingLivewireComponentSolutionProvider',
      16 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UndefinedViewVariableSolutionProvider',
      17 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\GenericLaravelExceptionSolutionProvider',
      18 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\OpenAiSolutionProvider',
      19 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\SailNetworkSolutionProvider',
      20 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownMysql8CollationSolutionProvider',
      21 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownMariadbCollationSolutionProvider',
    ),
    'ignored_solution_providers' => 
    array (
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '/Users/amitpatel/Downloads/codecanyon-TXOOQIzH-workdo-dash-saas-open-source-erp-with-multiworkspace/main-file',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
    'settings_file_path' => '',
    'recorders' => 
    array (
      0 => 'Spatie\\LaravelIgnition\\Recorders\\DumpRecorder\\DumpRecorder',
      1 => 'Spatie\\LaravelIgnition\\Recorders\\JobRecorder\\JobRecorder',
      2 => 'Spatie\\LaravelIgnition\\Recorders\\LogRecorder\\LogRecorder',
      3 => 'Spatie\\LaravelIgnition\\Recorders\\QueryRecorder\\QueryRecorder',
    ),
    'open_ai_key' => NULL,
    'with_stack_frame_arguments' => true,
    'argument_reducers' => 
    array (
      0 => 'Spatie\\Backtrace\\Arguments\\Reducers\\BaseTypeArgumentReducer',
      1 => 'Spatie\\Backtrace\\Arguments\\Reducers\\ArrayArgumentReducer',
      2 => 'Spatie\\Backtrace\\Arguments\\Reducers\\StdClassArgumentReducer',
      3 => 'Spatie\\Backtrace\\Arguments\\Reducers\\EnumArgumentReducer',
      4 => 'Spatie\\Backtrace\\Arguments\\Reducers\\ClosureArgumentReducer',
      5 => 'Spatie\\Backtrace\\Arguments\\Reducers\\DateTimeArgumentReducer',
      6 => 'Spatie\\Backtrace\\Arguments\\Reducers\\DateTimeZoneArgumentReducer',
      7 => 'Spatie\\Backtrace\\Arguments\\Reducers\\SymphonyRequestArgumentReducer',
      8 => 'Spatie\\LaravelIgnition\\ArgumentReducers\\ModelArgumentReducer',
      9 => 'Spatie\\LaravelIgnition\\ArgumentReducers\\CollectionArgumentReducer',
      10 => 'Spatie\\Backtrace\\Arguments\\Reducers\\StringableArgumentReducer',
    ),
  ),
  'paypal' => 
  array (
    'name' => 'Paypal',
    'mode' => 'sandbox',
    'sandbox' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'app_id' => 'APP-80W284485P519543T',
    ),
    'live' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'app_id' => '',
    ),
    'payment_action' => 'Sale',
    'currency' => 'USD',
    'notify_url' => '',
    'locale' => 'en_US',
    'validate_ssl' => true,
  ),
  'sms' => 
  array (
    'default' => 'textlocal',
    'drivers' => 
    array (
      'sns' => 
      array (
        'key' => 'Your AWS SNS Access Key',
        'secret' => 'Your AWS SNS Secret Key',
        'region' => 'Your AWS SNS Region',
        'from' => 'Your AWS SNS Sender ID',
        'type' => 'Transactional',
      ),
      'textlocal' => 
      array (
        'url' => 'http://api.textlocal.in/send/',
        'username' => 'Your Username',
        'hash' => 'Your Hash',
        'from' => 'Sender Name',
      ),
      'twilio' => 
      array (
        'sid' => 'Your SID',
        'token' => 'Your Token',
        'from' => 'Your Default From Number',
      ),
      'clockwork' => 
      array (
        'key' => 'Your clockwork API Key',
      ),
      'linkmobility' => 
      array (
        'url' => 'http://simple.pswin.com',
        'username' => 'Your Username',
        'password' => 'Your Password',
        'from' => 'Sender name',
      ),
      'melipayamak' => 
      array (
        'username' => 'Your Username',
        'password' => 'Your Password',
        'from' => 'Your Default From Number',
        'flash' => false,
      ),
      'melipayamakpattern' => 
      array (
        'username' => 'Your Username',
        'password' => 'Your Password',
      ),
      'kavenegar' => 
      array (
        'apiKey' => 'Your Api Key',
        'from' => 'Your Default From Number',
      ),
      'smsir' => 
      array (
        'url' => 'https://ws.sms.ir/',
        'apiKey' => 'Your Api Key',
        'secretKey' => 'Your Secret Key',
        'from' => 'Your Default From Number',
      ),
      'tsms' => 
      array (
        'url' => 'http://www.tsms.ir/soapWSDL/?wsdl',
        'username' => 'Your Username',
        'password' => 'Your Password',
        'from' => 'Your Default From Number',
      ),
      'farazsms' => 
      array (
        'url' => '188.0.240.110/services.jspd',
        'username' => 'Your Username',
        'password' => 'Your Password',
        'from' => 'Your Default From Number',
      ),
      'farazsmspattern' => 
      array (
        'url' => 'http://ippanel.com/patterns/pattern',
        'username' => 'Your Username',
        'password' => 'Your Password',
        'from' => 'Your Default From Number',
      ),
      'smsgatewayme' => 
      array (
        'apiToken' => 'Your Api Token',
        'from' => 'Your Default Device ID',
      ),
      'smsgateway24' => 
      array (
        'url' => 'https://smsgateway24.com/getdata/addsms',
        'token' => 'Your Api Token',
        'deviceid' => 'Your Default Device ID',
        'from' => 'Device SIM Slot.  0 or 1',
      ),
      'ghasedak' => 
      array (
        'url' => 'http://api.iransmsservice.com',
        'apiKey' => 'Your api key',
        'from' => 'Your Default From Number',
      ),
      'sms77' => 
      array (
        'apiKey' => 'Your API Key',
        'flash' => false,
        'from' => 'Sender name',
      ),
      'sabapayamak' => 
      array (
        'url' => 'https://api.SabaPayamak.com',
        'username' => 'Your Sabapayamak Username',
        'password' => 'Your Sabapayamak Password',
        'from' => 'Your Default From Number',
        'token_valid_day' => 30,
      ),
      'lsim' => 
      array (
        'username' => 'Your LSIM login',
        'password' => 'Your LSIM password',
        'from' => 'Your LSIM Sender ID',
      ),
      'rahyabcp' => 
      array (
        'url' => 'https://p.1000sms.ir/Post/Send.asmx?wsdl',
        'username' => 'Your Rahyabcp login',
        'password' => 'Your Rahyabcp password',
        'from' => 'Your Default From Number',
        'flash' => false,
      ),
      'rahyabir' => 
      array (
        'url' => 'https://api.rahyab.ir',
        'username' => 'Your Rahyabir Username',
        'password' => 'Your Rahyabir Password',
        'company' => 'Your Rahyabir Company',
        'from' => 'Your Default From Number',
        'token_valid_day' => 1,
      ),
      'd7networks' => 
      array (
        'url' => 'https://api.d7networks.com',
        'username' => 'Your D7networks ClientId',
        'password' => 'Your D7networks clientSecret',
        'originator' => 'SignOTP',
        'report_url' => '',
        'token_valid_day' => 1,
      ),
      'hamyarsms' => 
      array (
        'url' => 'http://payamakapi.ir/SendService.svc?singleWsdl',
        'username' => 'Your Hamyarsms Username',
        'password' => 'Your Hamyarsms Password',
        'from' => 'Your Default From Number',
        'flash' => false,
      ),
      'smsapi' => 
      array (
        'url' => 'http://www.smsapi.si/poslji-sms',
        'username' => 'Your SMSApi Username',
        'password' => 'Your SMSApi Password',
        'from' => 'Your Default From Number',
        'cc' => 'Your Default Country Code',
      ),
    ),
    'map' => 
    array (
      'sns' => 'Tzsk\\Sms\\Drivers\\Sns',
      'textlocal' => 'Tzsk\\Sms\\Drivers\\Textlocal',
      'twilio' => 'Tzsk\\Sms\\Drivers\\Twilio',
      'smsgateway24' => 'Tzsk\\Sms\\Drivers\\SmsGateway24',
      'clockwork' => 'Tzsk\\Sms\\Drivers\\Clockwork',
      'linkmobility' => 'Tzsk\\Sms\\Drivers\\Linkmobility',
      'melipayamak' => 'Tzsk\\Sms\\Drivers\\Melipayamak',
      'melipayamakpattern' => 'Tzsk\\Sms\\Drivers\\Melipayamakpattern',
      'kavenegar' => 'Tzsk\\Sms\\Drivers\\Kavenegar',
      'smsir' => 'Tzsk\\Sms\\Drivers\\Smsir',
      'tsms' => 'Tzsk\\Sms\\Drivers\\Tsms',
      'farazsms' => 'Tzsk\\Sms\\Drivers\\Farazsms',
      'farazsmspattern' => 'Tzsk\\Sms\\Drivers\\Farazsmspattern',
      'ghasedak' => 'Tzsk\\Sms\\Drivers\\Ghasedak',
      'sms77' => 'Tzsk\\Sms\\Drivers\\Sms77',
      'sabapayamak' => 'Tzsk\\Sms\\Drivers\\SabaPayamak',
      'lsim' => 'Tzsk\\Sms\\Drivers\\LSim',
      'rahyabcp' => 'Tzsk\\Sms\\Drivers\\Rahyabcp',
      'rahyabir' => 'Tzsk\\Sms\\Drivers\\Rahyabir',
      'd7networks' => 'Tzsk\\Sms\\Drivers\\D7networks',
      'hamyarsms' => 'Tzsk\\Sms\\Drivers\\Hamyarsms',
      'smsapi' => 'Tzsk\\Sms\\Drivers\\SmsApi',
    ),
  ),
  'paytabs' => 
  array (
    'profile_id' => NULL,
    'server_key' => NULL,
    'currency' => NULL,
    'region' => NULL,
  ),
  'landingpage' => 
  array (
    'name' => 'LandingPage',
  ),
  'productservice' => 
  array (
    'name' => 'ProductService',
  ),
  'taskly' => 
  array (
    'name' => 'Taskly',
  ),
  'account' => 
  array (
    'name' => 'Account',
  ),
  'hrm' => 
  array (
    'name' => 'Hrm',
  ),
  'lead' => 
  array (
    'name' => 'Lead',
  ),
  'pos' => 
  array (
    'name' => 'Pos',
  ),
  'stripe' => 
  array (
    'name' => 'Stripe',
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
