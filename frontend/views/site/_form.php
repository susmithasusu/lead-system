<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Lead */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lead-form">

    <?php $form = ActiveForm::begin([
             'id'=>'signup-form']); ?>

    <?= $form->field($model, 'first_name')->textInput(['style'=>'width:500px']) ?>

    <?= $form->field($model, 'last_name')->textInput(['style'=>'width:500px']) ?>

    <?= $form->field($model, 'email')->textInput(['style'=>'width:500px']) ?>

    <?= $form->field($model, 'phone')->textInput(['style'=>'width:500px']) ?>

    <?= $form->field($model, 'address')->textInput(['style'=>'width:500px']) ?>

    <?= $form->field($model, 'home_sqft')->textInput(['style'=>'width:500px']) ?>

    <div class="form-group">
    <button type="button" id="sub"  class="btn btn-primary" >Submit</button>
    </div>

    <?php ActiveForm::end(); ?>

</div>

     <script type="text/javascript">

var $ = jQuery;
jQuery(document).ready(function($){
   $('#sub').on('click', function() {
      

                $.ajax({
                url: 'index',
                type: 'post',
                data:$("#signup-form").serialize(),
                success: function (response) {
                    document.getElementById("signup-form").reset();
                  
      
   
                }
                });
   });
 });
</script>

