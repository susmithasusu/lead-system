<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Lead */

$this->title = 'Create Lead';


?>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="lead-create">

    
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
    </div>
    </div>
    </div>
    </div>
    </div>
<script>
$(document).ready(function(){

     var confirmExitIfModified = (function () {
    function formIsDirty(form) {
      for (var i = 0; i < form.elements.length; i++) {
        var element = form.elements[i];
        var type = element.type;
        if (type == "checkbox" || type == "radio") {
          if (element.checked != element.defaultChecked) {
            return true;
          }
        }
        else if (type == "hidden" || type == "password" ||
                type == "text" || type == "textarea") {
          if (element.value != element.defaultValue) {
            return true;
          }
        }
        else if (type == "select-one" || type == "select-multiple") {
          for (var j = 0; j < element.options.length; j++) {
            if (element.options[j].selected !=
                element.options[j].defaultSelected) {
              return true;
            }
          }
        }
      }
      return false;
    }

    return function(form, message) {
      window.onbeforeunload = function(e) {
        e = e || window.event;
        
        if (formIsDirty(document.forms[form])) {
          saveData();
          // For IE and Firefox
          if (e) {
            e.returnValue = message;
          }
          // For Safari
          return message;
        }
      };
    };
  })();

  confirmExitIfModified("signup-form", "Are you sure you want to go?");

  function saveData(){
    $.ajax({
      url: 'index',
      type: 'post',
      data:$("#signup-form").serialize(),
      success: function (response) {
        document.getElementById("signup-form").reset(); 
        window.location.href = '<?php echo Yii::$app->getUrlManager()->createUrl("/site/index"); ?>';  
      }
    });
  }
});

</script>

 
