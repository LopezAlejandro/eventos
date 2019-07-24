<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Aula */

$this->title = $model->id_aula;
$this->params['breadcrumbs'][] = ['label' => 'Aulas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aula-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_aula',
            //'id_curso',
            [   
                'attribute' => 'curso',
                'label' => 'Curso',
                'value' => function ($data) {
                return $data->curso->nombre;
            }
            ],  
            //'id_alumno',
            [   
                'attribute' => 'nombre',
                'label' => 'Nombre',
                'value' => function ($data) {
                return $data->alumno->nombre;
            }
            ],  
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
