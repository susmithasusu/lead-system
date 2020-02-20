<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Lead */

$this->params['breadcrumbs'][] = ['label' => 'Lead View'];

\yii\web\YiiAsset::register($this);
?>
<div class="lead-view">

       <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           
            'first_name',
            'last_name',
            'email:email',
            'phone',
            'address',
            'home_sqft',
            'created_at'
        ],
    ]) ?>

</div>
