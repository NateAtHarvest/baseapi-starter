<?php

namespace app\controllers\console;

use BaseApi;
use baseapi\console\controllers\InstallController as BaseInstall;

class InstallController extends BaseInstall
{
    public $defaultAction = 'install';

    /**
     * Installs this API
     */
    public function actionApi()
    {
        /**
         * Uses the base api install without modificationss
         */
        parent::actionApi();
    }
}