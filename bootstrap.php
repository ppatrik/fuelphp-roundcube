<?php

define('RCUBE_CONFIG_DIR', APPPATH . DS . 'config' . DS . \Fuel\Core\Fuel::$env . DS . 'rcube' . DS);
define('RCUBE_PLUGINS_DIR', __DIR__ . '/plugins/');
define('RCMAIL_VERSION', 'Htsys1.0.0');

include __DIR__ . '/rcube/bootstrap.php';

$classes = [
    'rcube',
    'html',
    'rcube',
    'rcube_addressbook',
    'rcube_base_replacer',
    'rcube_browser',
    'rcube_cache',
    'rcube_cache_shared',
    'rcube_charset',
    'rcube_config',
    'rcube_contacts',
    'rcube_content_filter',
    'rcube_csv2vcard',
    'rcube_db',
    'rcube_db_mssql',
    'rcube_db_mysql',
    'rcube_db_oracle',
    'rcube_db_pgsql',
    'rcube_db_sqlite',
    'rcube_db_sqlsrv',
    'rcube_enriched',
    'rcube_html2text',
    'rcube_image',
    'rcube_imap',
    'rcube_imap_cache',
    'rcube_imap_generic',
    'rcube_imap_search',
    'rcube_ldap',
    'rcube_ldap_generic',
    'rcube_message',
    'rcube_message_header',
    'rcube_message_part',
    'rcube_mime',
    'rcube_mime_decode',
    'rcube_output',
    'rcube_plugin',
    'rcube_plugin_api',
    'rcube_result_index',
    'rcube_result_multifolder',
    'rcube_result_set',
    'rcube_result_thread',
    'rcube_session',
    'rcube_smtp',
    'rcube_spellcheck_atd',
    'rcube_spellcheck_enchant',
    'rcube_spellcheck_engine',
    'rcube_spellcheck_googie',
    'rcube_spellcheck_pspell',
    'rcube_spellchecker',
    'rcube_storage',
    'rcube_string_replacer',
    'rcube_text2html',
    'rcube_tnef_decoder',
    'rcube_user',
    'rcube_utils',
    'rcube_vcard',
    'rcube_washtml',
];

$classesLoad = [];
foreach ($classes as $class) {
    $classesLoad[$class] = __DIR__ . '/rcube/' . $class . '.php';
}

\Fuel\Core\Autoloader::add_classes($classesLoad);