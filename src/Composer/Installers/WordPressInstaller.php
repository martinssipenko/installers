<?php
namespace Composer\Installers;

class WordPressInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin'    => 'docs/wp-content/plugins/{$name}/',
        'theme'     => 'docs/wp-content/themes/{$name}/',
        'muplugin'  => 'docs/wp-content/mu-plugins/{$name}/',
        'core'      => 'docs/',
    );
}
