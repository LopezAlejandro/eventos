<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cursos".
 *
 * @property int $id_curso
 * @property string $nombre
 * @property string $orador
 * @property string $fecha_ini
 * @property string $fecha_fin
 * @property string $hora_ini
 * @property string $hora_fin
 *
 * @property Aula[] $aulas
 */
class Cursos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cursos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'orador', 'fecha_ini', 'fecha_fin', 'hora_ini', 'hora_fin'], 'required'],
            [['fecha_ini', 'fecha_fin', 'hora_ini', 'hora_fin'], 'safe'],
            [['nombre'], 'string', 'max' => 50],
            [['orador'], 'string', 'max' => 40],
            [['fecha_ini'], 'date', 'format'=>'yyyy-MM-dd'],
            [['fecha_fin'], 'date', 'format'=>'yyyy-MM-dd'],
            [['hora_ini'], 'date', 'format'=>'H:i'],
            [['hora_fin'], 'date', 'format'=>'H:i'],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_curso' => 'Código del Curso',
            'nombre' => 'Nombre del Curso',
            'orador' => 'Orador',
            'fecha_ini' => 'Fecha de Inicio',
            'fecha_fin' => 'Fecha de Finalización',
            'hora_ini' => 'Hora de Inicio',
            'hora_fin' => 'Hora de Finalización',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAulas()
    {
        return $this->hasMany(Aula::className(), ['id_curso' => 'id_curso']);
    }

    /**
     * {@inheritdoc}
     * @return CursosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CursosQuery(get_called_class());
    }
}
