<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site iinlms, environment app
$aliases['app'] = array(
  'root' => '/var/www/html/iinlms.app/docroot',
  'ac-site' => 'iinlms',
  'ac-env' => 'app',
  'ac-realm' => 'prod',
  'uri' => 'iinlmsapp.prod.acquia-sites.com',
  'remote-host' => 'staging-7092.prod.hosting.acquia.com',
  'remote-user' => 'iinlms.app',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['app.livedev'] = array(
  'parent' => '@iinlms.app',
  'root' => '/mnt/gfs/iinlms.app/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site iinlms, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/iinlms.dev/docroot',
  'ac-site' => 'iinlms',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'iinlmsdev.prod.acquia-sites.com',
  'remote-host' => 'staging-7092.prod.hosting.acquia.com',
  'remote-user' => 'iinlms.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@iinlms.dev',
  'root' => '/mnt/gfs/iinlms.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site iinlms, environment prod
$aliases['prod'] = array(
  'root' => '/var/www/html/iinlms.prod/docroot',
  'ac-site' => 'iinlms',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'iinlms.prod.acquia-sites.com',
  'remote-host' => 'web-8533.prod.hosting.acquia.com',
  'remote-user' => 'iinlms.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['prod.livedev'] = array(
  'parent' => '@iinlms.prod',
  'root' => '/mnt/gfs/iinlms.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site iinlms, environment qa01
$aliases['qa01'] = array(
  'root' => '/var/www/html/iinlms.qa01/docroot',
  'ac-site' => 'iinlms',
  'ac-env' => 'qa01',
  'ac-realm' => 'prod',
  'uri' => 'iinlmsqa01.prod.acquia-sites.com',
  'remote-host' => 'staging-7092.prod.hosting.acquia.com',
  'remote-user' => 'iinlms.qa01',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['qa01.livedev'] = array(
  'parent' => '@iinlms.qa01',
  'root' => '/mnt/gfs/iinlms.qa01/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site iinlms, environment sandbox
$aliases['sandbox'] = array(
  'root' => '/var/www/html/iinlms.sandbox/docroot',
  'ac-site' => 'iinlms',
  'ac-env' => 'sandbox',
  'ac-realm' => 'prod',
  'uri' => 'iinlmssandbox.prod.acquia-sites.com',
  'remote-host' => 'staging-7092.prod.hosting.acquia.com',
  'remote-user' => 'iinlms.sandbox',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['sandbox.livedev'] = array(
  'parent' => '@iinlms.sandbox',
  'root' => '/mnt/gfs/iinlms.sandbox/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site iinlms, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/iinlms.test/docroot',
  'ac-site' => 'iinlms',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'iinlmsstg.prod.acquia-sites.com',
  'remote-host' => 'staging-7092.prod.hosting.acquia.com',
  'remote-user' => 'iinlms.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@iinlms.test',
  'root' => '/mnt/gfs/iinlms.test/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site iinlms, environment testqa
$aliases['testqa'] = array(
  'root' => '/var/www/html/iinlms.testqa/docroot',
  'ac-site' => 'iinlms',
  'ac-env' => 'testqa',
  'ac-realm' => 'prod',
  'uri' => 'iinlmstestqa.prod.acquia-sites.com',
  'remote-host' => 'staging-7092.prod.hosting.acquia.com',
  'remote-user' => 'iinlms.testqa',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['testqa.livedev'] = array(
  'parent' => '@iinlms.testqa',
  'root' => '/mnt/gfs/iinlms.testqa/livedev/docroot',
);
