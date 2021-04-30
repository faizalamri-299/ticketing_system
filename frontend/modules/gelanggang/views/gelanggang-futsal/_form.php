<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\gelanggang\models\GelanggangFutsal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gelanggang-futsal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gf_mod_nama_gelanggang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gf_mod_lokasi_gelanggang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gf_mod_bayaran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
