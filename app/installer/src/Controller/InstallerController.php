<?php

namespace Pagekit\Installer\Controller;

use Pagekit\Application as App;
use Pagekit\Installer\Installer;

class InstallerController
{
    protected Installer $installer;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $app = App::getInstance();
        if (!$app instanceof \Pagekit\Application) {
            throw new \RuntimeException('App::getInstance() did not return a Pagekit\Application instance.');
        }
        $this->installer = new Installer($app);
    }

    public function indexAction(): array
    {
        $intl = App::module('system/intl');

        return [
            '$view' => [
                'title' => __('GasTTropia Installer'),
                'name' => 'app/installer/views/installer.php',
            ],
            '$installer' => [
                'locale' => $intl->getLocale(),
                'locales' => $intl->getAvailableLanguages(),
                'sqlite' => class_exists('SQLite3') || (class_exists('PDO') && in_array('sqlite', \PDO::getAvailableDrivers(), true))
            ]
        ];
    }

    /**
     * @Request({"config": "array"})
     */
    public function checkAction($config = []): array
    {
        return $this->installer->check($config);
    }

    /**
     * @Request({"config": "array", "option": "array", "user": "array"})
     */
    public function installAction($config = [], $option = [], $user = []): array
    {
        return $this->installer->install($config, $option, $user);
    }

}
