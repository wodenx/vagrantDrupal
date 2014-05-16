<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site adminui, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/adminui.dev/docroot',
  'ac-site' => 'adminui',
  'ac-env' => 'dev',
  'ac-realm' => 'devcloud',
  'uri' => 'adminuidev.devcloud.acquia-sites.com',
  'remote-host' => 'free-3225.devcloud.hosting.acquia.com',
  'remote-user' => 'adminui.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@adminui.dev',
  'root' => '/mnt/gfs/adminui.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site adminui, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/adminui.test/docroot',
  'ac-site' => 'adminui',
  'ac-env' => 'test',
  'ac-realm' => 'devcloud',
  'uri' => 'adminuitest.devcloud.acquia-sites.com',
  'remote-host' => 'free-3225.devcloud.hosting.acquia.com',
  'remote-user' => 'adminui.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@adminui.test',
  'root' => '/mnt/gfs/adminui.test/livedev/docroot',
);
