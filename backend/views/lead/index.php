<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LeadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

 $this->title = 'Leads List';
 $this->params['breadcrumbs'][] = $this->title;
?>
<div class="lead-index">

    <h1><?= Html::encode($this->title) ?></h1>

    
       <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'first_name',
            'last_name',
            'email:email',
            'created_at',

            [  
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width:260px;'],
                'header'=>'Actions',
                'template' => '{view} {delete}',
                'buttons' => [
        
                    //view button
                    'view' => function ($url, $model) {
                        return Html::a('<span class="fa fa-search"></span>View', $url, [
                                    'title' => Yii::t('app', 'View'),
                                    'class'=>'btn btn-primary btn-xs',                                  
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="fa fa-search"></span>Delete', $url, [
                                    'title' => Yii::t('app', 'delete'),
                                    'class'=>'btn btn-primary btn-xs',                                  
                        ]);
                    },
                ],
        
              
        
               ],
        ],
    ]); ?>


</div>
