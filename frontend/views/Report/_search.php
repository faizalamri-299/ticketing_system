<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ReportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="report-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fk_cpre_company_id') ?>

    <?= $form->field($model, 'sys_created_at') ?>

    <?= $form->field($model, 'sys_updated_at') ?>

    <?= $form->field($model, 'cpre_details') ?>

    <?php // echo $form->field($model, 'cpre_status') ?>

    <?php // echo $form->field($model, 'cpre_priority') ?>

    <?php // echo $form->field($model, 'cpre_done') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
