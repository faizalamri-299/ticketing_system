<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\gelanggang\models\GelanggangFutsalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gelanggang-futsal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'gf_mod_nama_gelanggang') ?>

    <?= $form->field($model, 'gf_mod_lokasi_gelanggang') ?>

    <?= $form->field($model, 'gf_mod_bayaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
