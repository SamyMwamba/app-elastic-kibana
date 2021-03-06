<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'elastic_kibana';
$app['version'] = '1.2.7';
$app['release'] = '1';
$app['vendor'] = 'WikiSuite';
$app['packager'] = 'eGloo';
$app['license'] = 'GPLv3';
$app['license_core'] = 'LGPLv3';
$app['description'] = lang('elastic_kibana_app_description');
$app['powered_by'] = array(
    'vendor' => array(
        'name' => 'Elastic',
        'url' => 'https://www.elastic.co'
    ),
    'packages' => array(
        'kibana' => array(
            'name' => 'Kibana',
            'version' => '---',
            'url' => 'https://www.elastic.co/products/kibana',
        ),
    ),
);

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('elastic_kibana_app_name');
$app['category'] = lang('base_category_server');
$app['subcategory'] = 'Search';

/////////////////////////////////////////////////////////////////////////////
// Controllers
/////////////////////////////////////////////////////////////////////////////

$app['controllers']['elastic_kibana']['title'] = $app['name'];
$app['controllers']['settings']['title'] = lang('base_settings');
$app['controllers']['policy']['title'] = lang('base_app_policy');

/////////////////////////////////////////////////////////////////////////////
// Packaging
/////////////////////////////////////////////////////////////////////////////

$app['obsoletes'] = array(
    'app-kibana'
);

$app['core_obsoletes'] = array(
    'app-kibana-core'
);

$app['core_requires'] = array(
    'app-elasticsearch-core >= 1:1.2.1',
    'app-kibana-plugin-core',
    'clearos-framework >= 7.3.0',
    'kibana >= 5.4.0',
    'java',
    'mod_authnz_external-webconfig',
    'mod_authz_unixgroup-webconfig'
);

$app['requires'] = array(
    'app-elasticsearch',
);

$app['core_directory_manifest'] = array(
    '/var/clearos/elastic_kibana' => array(),
    '/var/clearos/elastic_kibana/backup' => array(),
);

$app['core_file_manifest'] = array(
    'kibana.php'=> array('target' => '/var/clearos/base/daemon/kibana.php'),
    'kibana.conf'=> array('target' => '/usr/clearos/sandbox/etc/httpd/conf.d/kibana.conf')
);

$app['delete_dependency'] = array(
    'app-elastic-kibana-core',
    'app-kibana-plugin-core',
    'kibana',
);
