<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site shareiin, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/shareiin.dev/docroot',
  'ac-site' => 'shareiin',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'shareiindev.prod.acquia-sites.com',
  'remote-host' => 'staging-7284.prod.hosting.acquia.com',
  'remote-user' => 'shareiin.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@shareiin.dev',
  'root' => '/mnt/gfs/shareiin.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site shareiin, environment loadtest
$aliases['loadtest'] = array(
  'root' => '/var/www/html/shareiin.loadtest/docroot',
  'ac-site' => 'shareiin',
  'ac-env' => 'loadtest',
  'ac-realm' => 'prod',
  'uri' => 'shareiinlt.prod.acquia-sites.com',
  'remote-host' => 'ded-8315.prod.hosting.acquia.com',
  'remote-user' => 'shareiin.loadtest',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['loadtest.livedev'] = array(
  'parent' => '@shareiin.loadtest',
  'root' => '/mnt/gfs/shareiin.loadtest/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site shareiin, environment prod
$aliases['prod'] = array(
  'root' => '/var/www/html/shareiin.prod/docroot',
  'ac-site' => 'shareiin',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'shareiin.prod.acquia-sites.com',
  'remote-host' => 'ded-7282.prod.hosting.acquia.com',
  'remote-user' => 'shareiin.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['prod.livedev'] = array(
  'parent' => '@shareiin.prod',
  'root' => '/mnt/gfs/shareiin.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site shareiin, environment sandbox
$aliases['sandbox'] = array(
  'root' => '/var/www/html/shareiin.sandbox/docroot',
  'ac-site' => 'shareiin',
  'ac-env' => 'sandbox',
  'ac-realm' => 'prod',
  'uri' => 'shareiinsandbox.prod.acquia-sites.com',
  'remote-host' => 'staging-7284.prod.hosting.acquia.com',
  'remote-user' => 'shareiin.sandbox',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['sandbox.livedev'] = array(
  'parent' => '@shareiin.sandbox',
  'root' => '/mnt/gfs/shareiin.sandbox/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site shareiin, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/shareiin.test/docroot',
  'ac-site' => 'shareiin',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'shareiinstg.prod.acquia-sites.com',
  'remote-host' => 'staging-7284.prod.hosting.acquia.com',
  'remote-user' => 'shareiin.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@shareiin.test',
  'root' => '/mnt/gfs/shareiin.test/livedev/docroot',
);
