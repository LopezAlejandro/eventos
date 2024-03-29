<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alumno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumno-form">

    <?php $form = ActiveForm::begin(['options'=>['style'=>'width:500px;margin:0px auto;']]); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true,'size' => 40]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>
    
	 <?= $form->field($model, 'passw')->passwordInput(['maxlength' => true]) ?>
	 
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
