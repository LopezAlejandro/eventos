<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Cursos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cursos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orador')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model,'fecha_ini')->
    widget(DatePicker::className(),[
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'yearRange' => '-115:+0',
            'changeYear' => true],
        'options' => ['class' => 'form-control', 'style' => 'width:25%']    
    ]) ?>
    
    <?php echo $form->field($model,'fecha_fin')->
    widget(DatePicker::className(),[
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'yearRange' => '-115:+0',
            'changeYear' => true],
        'options' => ['class' => 'form-control', 'style' => 'width:25%']   
    ]) ?>

    <?php echo $form->field($model, 'hora_ini')->widget(TimePicker::classname(), [
        'pluginOptions' => [
        'showSeconds' => false,
        'minuteStep' => 10,
        'showMeridian' => false,
    ]
    ]); ?>

    <?php echo $form->field($model, 'hora_fin')->widget(TimePicker::classname(), [
        'pluginOptions' => [
        'showSeconds' => false,
        'minuteStep' => 10,
        'showMeridian' => false,
    ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
