<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->registerCssFile("@web/css/main.css", [
    'depends' => [\yii\bootstrap\BootstrapAsset::className()],
]);

?>


<style>
  #p {
    margin-top: 10px;
  }

  #k {
    font-size: 20px;
  }

  body {
    /* background-image: url("https://i.ytimg.com/vi/jkEL-9TlN8Y/maxresdefault.jpg"); */
    background-size: 100%;
  }

  #field1 {
    width: 300px;
    /* border:1px solid whitesmoke; */
  }
</style>
<!DOCTYPE html>
<head>


</head>
<body>

<div class="content">
  <div class="container">
    <h2 class="text-center"></h2>
      <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="form-group row" id="p">
      <div class="col-sm-4">
          <?= $form->field($model, 'header', ['validateOnType' => true, 'validationDelay' => false])->textInput(['maxlength' => true]) ?>
      </div>
    </div>

    <div class="form-group row ">
      <div class="col-sm-4">
          <?= $form->field($model, 'category')->dropDownList(['International' => 'International', 'Tours and Travels' => 'Tours and Travels',
              'Cooking Tips' => 'Cooking Tips'], ['prompt' => 'Select category']) ?>
      </div>
    </div>
    <div class="container py-2">
      <div class="row">
        <div class="col-4">

        </div>
      </div>
    </div>

    <div class="form-group">
        <?= $form->field($model, 'image')->fileInput() ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'text', ['validateOnType' => true, 'validationDelay' => false])
            ->widget(\froala\froalaeditor\FroalaEditorWidget::class, ['model' => $model,]) ?>
    </div>
    <div class="form-group row">
      <div class="col-sm-4">
          <?= $form->field($model, 'link')->textInput(['placeholder' => 'https://www.youtube.com/watch?v=ITKBiGhwwLo']) ?>
      </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
      <?php ActiveForm::end(); ?>
  </div>

</div>




</body>

</html>

