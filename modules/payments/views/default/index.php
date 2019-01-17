<?php
namespace app\modules\payments;

use yii\helpers\Html;
use app\modules\payments\models\PaymentsForm;
use yii\widgets\ActiveForm;
use yii\db\ActiveRecord;
?>

<h1>Произвести оплату</h1>

<div class="payments-default-index">
    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>


            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'email')->input('email',['required' => true] ) ?>

            <?= $form->field($model, 'address')->textInput(['required' => true]) ?>

            <?= $form->field($model, 'inn')->textInput(['required' => true]) ?>
            <?= $form->field($model, 'kpp')->textInput(['required' => true]) ?>
            <?= $form->field($model, 'rschet')->textInput(['required' => true]) ?>
            <?= $form->field($model, 'kschet')->textInput(['required' => true]) ?>
            <?= $form->field($model, 'bik')->textInput(['required' => true]) ?>
            <?= $form->field($model, 'bank')->textInput(['required' => true]) ?>


            <div class="form-group">
                <?= Html::submitButton('Оплатить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>

    <p style="width: 600px">
        Нажимая на кнопку «оплатить», я даю согласие на <a class="underline" rel="nofollow" href="/politic">обработку
            персональных
            данных</a> в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных»
    </p>
</div>
