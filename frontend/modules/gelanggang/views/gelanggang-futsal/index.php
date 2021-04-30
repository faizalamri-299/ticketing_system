<?php

use yii\helpers\Html;
use yii\helpers\Url;

use kartik\grid\GridView;
use yii\widgets\Pjax;
use common\components\BitGridView;
use yii\web\JsExpression;
use yii\helpers\Json;
/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\gelanggang\models\GelanggangFutsalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gelanggang Futsals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gelanggang-futsal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Gelanggang Futsal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gf_mod_nama_gelanggang',
            'gf_mod_lokasi_gelanggang',
            'gf_mod_bayaran',

           ['class' => 'kartik\grid\ActionColumn',
                'vAlign' => 'top',
                // 'options' => ['style' => 'width:9%'],
                'header' => 'Tindakan',
                'template' => '{view} {update} {delete}',
                 'buttons' => [
                    'view' => function ($url,$model, $key) {
                            return Html::a('<i class="fe-search" style="font-size: 1.3em;"></i><span>', $url,
                            [
                                'title' => Yii::t('app', 'Maklumat'), 
                                'data-pjax' => 0,
                                'data-tooltip'=>"tooltip",
                            ]);
                        },
                    'update' => function ($url,$model)  {
                        return Html::a('<i class="fe-edit-1" style="font-size: 1.3em;"></i><span>', $url,
                            [
                                'title' => Yii::t('app', 'Kemaskini'),
                                'data-pjax' => 0,
                                'data-tooltip'=>"tooltip",
                            ]);
                    },
                    'delete' => function ($url,$model, $key) {
                        return Html::a('<i class="fe-trash" style="font-size: 1.3em;"></i><span>', $url,
                            [
                                'title' => Yii::t('app', 'Padam'), 
                                'data' => [
                                    'confirm'=>'Adakah anda pasti?', 
                                    'method' => 'post',
                                    'tooltip' => 'tooltip',  
                                    'pjax' => 0,
                                ], 
                            ]);
                    },
                ],
                'urlCreator' => function ($action, $model) {
                    if ($action === 'view') {
                         return Url::toRoute(['view', 'id'=>$model['id']]);
                    }
                     if ($action === 'update') {
                         return Url::toRoute(['update', 'id'=>$model['id']]);
                    }
                    if($action === 'delete') {
                        return Url::toRoute(['delete', 'id'=>$model['id']]);
                    }
                },   
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
