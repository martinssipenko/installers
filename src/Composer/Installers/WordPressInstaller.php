<?php
namespace Composer\Installers;

class WordPressInstaller extends BaseInstaller
{
    protected $locations = array(
        'plugin'    => 'plugins/{$name}/',
        'theme'     => 'themes/{$name}/',
        'muplugin'  => 'mu-plugins/{$name}/',
        'core'      => 'docs/',
    );
}
