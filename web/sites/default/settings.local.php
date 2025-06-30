<?php

ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
ini_set('max_execution_time', 0);
$config['system.logging']['error_level'] = 'verbose';

$settings['rebuild_access'] = FALSE;
$settings['trusted_host_patterns'] = [
  "^dev-local\.intranet-dipvvf\.com$",
];

$databases['default']['default'] = array (
  'database' => 'intranet_dipvvf',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'isolation_level' => 'READ COMMITTED',
  'driver' => 'mysql',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'autoload' => 'core/modules/mysql\\src\\Driver\\Database\\mysql\\',
);

// $conf['file_temporary_path'] = '/tmp';

if ( file_exists( DRUPAL_ROOT . '/sites/development.services.yml') ) {
  $settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
}

$config['system.performance']['css']['preprocess'] = false;
$config['system.performance']['js']['preprocess'] = false;
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
