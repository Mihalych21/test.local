<?php

namespace app\modules\payments\controllers;

use Yii;
use yii\web\Controller;
use app\modules\payments\models\PaymentsForm;
use yii\db\ActiveRecord;

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
//        $model = new PaymentsForm();
        $model = new PaymentsForm();

        if ($model->load(Yii::$app->request->post())) { // данные пришли
            if ($model->validate()){

               $model->name = 'test';
               $model->email = 'test';
               $model->address = 'test';
               $model->inn = 'test';
               $model->rschet = 'test';
               $model->kschet = 'test';
               $model->bik = 'test';
               $model->bank = 'test';
//                var_dump($model);die;
               return  $this->render('ok', ['model' => $model]);
            }
        }

        return $this->render('index', ['model' => $model]);
    }

}
