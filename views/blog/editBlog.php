<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html; ?>


<style>


</style>
<?php $this->registerCssFile("@web/css/main.css", [
    'depends' => [\yii\bootstrap\BootstrapAsset::className()],
]); ?>
<!DOCTYPE html>
<head>
</head>
<body>

<div class="content">
  <div class="container">
    <h2 class="text-center"></h2>
      <?php $form = ActiveForm::begin(); ?>
    <div class="form-group" id="p">
        <?= $form->field($model, 'header')->textInput(['value' => $model->header]) ?>
    </div>

    <div class="container py-2">
      <div class="row">
        <div class="col-4">

        </div>
      </div>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'category')->dropDownList(['International' => 'International', 'Tours and Travels' => 'Tours and Travels',
            'Cooking Tips' => 'Cooking Tips'], ['value' => $model->category]) ?>
    </div>

    <div class="form-group">
        <?= $form->field($model, 'image')->fileInput(['maxFileSize' => 5120 * 10]) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'text')->widget(\froala\froalaeditor\FroalaEditorWidget::class, ['model' => $model,]) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'link')->textInput(['placeholder' => 'https://www.youtube.com/watch?v=ITKBiGhwwLo', 'value' => $model->link]) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
      <?php ActiveForm::end(); ?>
  </div>

</div>


</body>

</html>