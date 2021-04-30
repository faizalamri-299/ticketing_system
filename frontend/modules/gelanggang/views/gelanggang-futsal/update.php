<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\gelanggang\models\GelanggangFutsal */

$this->title = 'Update Gelanggang Futsal: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gelanggang Futsals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gelanggang-futsal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
