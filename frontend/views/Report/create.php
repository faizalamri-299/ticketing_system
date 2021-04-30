<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

$Status = [
    "0" => "New",
    "1" => "In Checking",
    "2" => "Success",
    "3" => "Failed",

];

$Priority = [
    "1" => "Low",
    "2" => "Medium",
    "3" => "High",

];

$Done = [
    "1" => "Not Done",
    "2" => "Done",
    "3" => "Failed",

];

$company = [
    "1" => "Mc Donald",
    "2" => "Duo Pharma",
    "3" => "Juan Tian",
];

/* @var $this yii\web\View */
/* @var $model frontend\models\Report */

$this->title = 'Create Report';
$this->params['breadcrumbs'][] = ['label' => 'Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_cpre_company_id')->widget(Select2::class, [
        'data' => $company,
        'theme' => Select2::THEME_DEFAULT,
        'options' => ['id' => 'fk_cpre_company_id', 'placeholder' => 'Select Company...'],
        'pluginOptions' => [
        'allowClear' => true,
        ],
    ]) ?>

    <?= $form->field($model, 'cpre_details')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'cpre_issuer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpre_priority')->widget(Select2::class, [
    'data' => $Priority,
    'theme' => Select2::THEME_DEFAULT,
    'options' => ['id' => 'cpre_priority', 'placeholder' => 'Select Company...'],
    'pluginOptions' => [
    'allowClear' => true,
    ],
    ]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
