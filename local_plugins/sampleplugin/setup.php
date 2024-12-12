<?php

define('PLUGIN_SAMPLEPLUGIN_VERSION', '1.0.0');

function plugin_init_sampleplugin() {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['sampleplugin'] = true;
    $PLUGIN_HOOKS['post_plugin_install']['sampleplugin'] = 'display_toast_message';
        // Register display_login hook
    $PLUGIN_HOOKS['display_login']['sampleplugin'] = 'myplugin_display_login';
}

function plugin_version_sampleplugin() {
    return [
        'name' => 'sampleplugin',
        'version' => PLUGIN_SAMPLEPLUGIN_VERSION,
        'author' => 'Ambinintsoa',
        'description' => 'A sample plugin for demonstrating plugin creation.',
        'homepage' => '',
    ];
}