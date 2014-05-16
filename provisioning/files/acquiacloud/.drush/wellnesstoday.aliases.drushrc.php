<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site wellnesstoday, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/wellnesstoday.dev/docroot',
  'ac-site' => 'wellnesstoday',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'wellnesstodaydev.prod.acquia-sites.com',
  'remote-host' => 'staging-7284.prod.hosting.acquia.com',
  'remote-user' => 'wellnesstoday.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@wellnesstoday.dev',
  'root' => '/mnt/gfs/wellnesstoday.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site wellnesstoday, environment prod
$aliases['prod'] = array(
  'root' => '/var/www/html/wellnesstoday.prod/docroot',
  'ac-site' => 'wellnesstoday',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'wellnesstoday.prod.acquia-sites.com',
  'remote-host' => 'ded-7282.prod.hosting.acquia.com',
  'remote-user' => 'wellnesstoday.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['prod.livedev'] = array(
  'parent' => '@wellnesstoday.prod',
  'root' => '/mnt/gfs/wellnesstoday.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site wellnesstoday, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/wellnesstoday.test/docroot',
  'ac-site' => 'wellnesstoday',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'wellnesstodaystg.prod.acquia-sites.com',
  'remote-host' => 'staging-7284.prod.hosting.acquia.com',
  'remote-user' => 'wellnesstoday.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@wellnesstoday.test',
  'root' => '/mnt/gfs/wellnesstoday.test/livedev/docroot',
);
