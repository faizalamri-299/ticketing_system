<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Report', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'cpre_index',
            [
                'attribute'=>'fk_cpre_company_id',
                'value'=>'companyName.cp_nama',
            ],
            // 'sys_created_at',
            // 'sys_updated_at',
            'cpre_details',
            [
            'attribute' => 'infoStatus',
            'format' => 'html',
            'filter' => [0 => 'Baru', 
                        1 => 'Semakan',
                        2 => 'Lulus',
                        3 => 'Gagal',],
            ],
            [
            'attribute' => 'infoPriority',
            'format' => 'html',
            'filter' => [0 => 'Baru', 
                        1 => 'Semakan',
                        2 => 'Lulus',
                        3 => 'Gagal',],
            ],
            [
            'attribute' => 'infoDone',
            'format' => 'html',
            'filter' => [0 => 'Baru', 
                        1 => 'Semakan',
                        2 => 'Lulus',
                        3 => 'Gagal',],
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
