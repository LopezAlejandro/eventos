<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumnos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumno-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Alumno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_alumno',
            'nombre',
            'mail',
            //'passw',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete} {certificado}',
                'buttons' =>
                    [
                        'certificado' => function ($url,$model, $key) {
                            return Html::a ( '<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> ', ['controller/action', 'id' => $model->id_alumno] );
                        }
                    ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
