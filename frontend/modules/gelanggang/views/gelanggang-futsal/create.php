<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\gelanggang\models\GelanggangFutsal */

$this->title = 'Create Gelanggang Futsal';
$this->params['breadcrumbs'][] = ['label' => 'Gelanggang Futsals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gelanggang-futsal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
