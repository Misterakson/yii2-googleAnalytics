<?php

namespace misterakson\analytics\controllers;

use yii\web\Controller;


/**
 * Default controller for the `GA` module
 */
class AnalyticsController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public function actionIndex()
    {
        return $this->render('index');
    }


}
