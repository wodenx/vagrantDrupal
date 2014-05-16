<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site iin, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/iin.dev/docroot',
  'ac-site' => 'iin',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'iindev.prod.acquia-sites.com',
  'remote-host' => 'staging-7284.prod.hosting.acquia.com',
  'remote-user' => 'iin.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@iin.dev',
  'root' => '/mnt/gfs/iin.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site iin, environment loadtest
$aliases['loadtest'] = array(
  'root' => '/var/www/html/iin.loadtest/docroot',
  'ac-site' => 'iin',
  'ac-env' => 'loadtest',
  'ac-realm' => 'prod',
  'uri' => 'iinlt.prod.acquia-sites.com',
  'remote-host' => 'ded-8315.prod.hosting.acquia.com',
  'remote-user' => 'iin.loadtest',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['loadtest.livedev'] = array(
  'parent' => '@iin.loadtest',
  'root' => '/mnt/gfs/iin.loadtest/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site iin, environment prod
$aliases['prod'] = array(
  'root' => '/var/www/html/iin.prod/docroot',
  'ac-site' => 'iin',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'iin.prod.acquia-sites.com',
  'remote-host' => 'ded-7282.prod.hosting.acquia.com',
  'remote-user' => 'iin.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['prod.livedev'] = array(
  'parent' => '@iin.prod',
  'root' => '/mnt/gfs/iin.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site iin, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/iin.test/docroot',
  'ac-site' => 'iin',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'iinstg.prod.acquia-sites.com',
  'remote-host' => 'staging-7284.prod.hosting.acquia.com',
  'remote-user' => 'iin.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@iin.test',
  'root' => '/mnt/gfs/iin.test/livedev/docroot',
);
