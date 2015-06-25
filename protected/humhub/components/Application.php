<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\components;

use Yii;

/**
 * Base WebApplication
 *
 * @author luke
 */
class Application extends \yii\web\Application
{

    public function beforeAction($action)
    {

        /**
         * Check if it's already installed - if not force controller module
         */
        if (!$this->params['installed'] && $this->controller->module != null && $this->controller->module->id != 'installer') {
            $this->controller->redirect(\yii\helpers\Url::to(['/installer/index']));
            return false;
        }

        return parent::beforeAction($action);
    }

}
