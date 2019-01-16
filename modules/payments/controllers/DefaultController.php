<?php

namespace app\modules\payments\controllers;

use yii\web\Controller;
use app\modules\payments\models\PaymentsForm;

/**
 * Default controller for the `payments` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new PaymentsForm();
        return $this->render('index', ['model' => $model]);
    }
}
