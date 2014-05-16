<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site testing11, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/testing11.dev/docroot',
  'ac-site' => 'testing11',
  'ac-env' => 'dev',
  'ac-realm' => 'devcloud',
  'uri' => 'testing11dev.devcloud.acquia-sites.com',
  'remote-host' => 'free-3218.devcloud.hosting.acquia.com',
  'remote-user' => 'testing11.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@testing11.dev',
  'root' => '/mnt/gfs/testing11.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site testing11, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/testing11.test/docroot',
  'ac-site' => 'testing11',
  'ac-env' => 'test',
  'ac-realm' => 'devcloud',
  'uri' => 'testing11test.devcloud.acquia-sites.com',
  'remote-host' => 'free-3218.devcloud.hosting.acquia.com',
  'remote-user' => 'testing11.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@testing11.test',
  'root' => '/mnt/gfs/testing11.test/livedev/docroot',
);
