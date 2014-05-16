<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site coaches, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/coaches.dev/docroot',
  'ac-site' => 'coaches',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'coachesdev.prod.acquia-sites.com',
  'remote-host' => 'staging-7284.prod.hosting.acquia.com',
  'remote-user' => 'coaches.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@coaches.dev',
  'root' => '/mnt/gfs/coaches.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site coaches, environment loadtest
$aliases['loadtest'] = array(
  'root' => '/var/www/html/coaches.loadtest/docroot',
  'ac-site' => 'coaches',
  'ac-env' => 'loadtest',
  'ac-realm' => 'prod',
  'uri' => 'coacheslt.prod.acquia-sites.com',
  'remote-host' => 'ded-8315.prod.hosting.acquia.com',
  'remote-user' => 'coaches.loadtest',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['loadtest.livedev'] = array(
  'parent' => '@coaches.loadtest',
  'root' => '/mnt/gfs/coaches.loadtest/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site coaches, environment prod
$aliases['prod'] = array(
  'root' => '/var/www/html/coaches.prod/docroot',
  'ac-site' => 'coaches',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'coaches.prod.acquia-sites.com',
  'remote-host' => 'ded-7282.prod.hosting.acquia.com',
  'remote-user' => 'coaches.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['prod.livedev'] = array(
  'parent' => '@coaches.prod',
  'root' => '/mnt/gfs/coaches.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site coaches, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/coaches.test/docroot',
  'ac-site' => 'coaches',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'coachesstg.prod.acquia-sites.com',
  'remote-host' => 'staging-7284.prod.hosting.acquia.com',
  'remote-user' => 'coaches.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@coaches.test',
  'root' => '/mnt/gfs/coaches.test/livedev/docroot',
);
