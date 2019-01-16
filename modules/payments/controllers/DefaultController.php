<?php

namespace app\modules\payments\controllers;

use Yii;
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

        if ($model->load(Yii::$app->request->post())) { // данные пришли
            if ($model->validate()){
                die('here');
            }
        }


        return $this->render('index', ['model' => $model]);
    }

}
