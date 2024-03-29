<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Aula */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aula-form">

    <?php $form = ActiveForm::begin(); ?>
	 <?php $cursos_name = ArrayHelper::map(\app\models\Cursos::find()->orderBy('nombre')->all(), 'id_curso', 'nombre') ?>
    <?php $alumno_name = ArrayHelper::map(\app\models\Alumno::find()->orderBy('nombre')->all(), 'id_alumno', 'nombre') ?>
    
    <?= $form->field($model, 'id_curso')->dropDownList($cursos_name, ['prompt' => '---- Elija una charla ----'])->label('Nombre del curso') ?>    
    <?= $form->field($model, 'id_alumno')->dropDownList($alumno_name, ['prompt' => '---- Elija un alumno ----'])->label('Nombre del Alumno') ?>
  
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
