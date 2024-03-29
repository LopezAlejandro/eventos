<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumno".
 *
 * @property int $id_alumno
 * @property string $nombre
 * @property string $mail
 * @property string $passw
 *
 * @property Aula[] $aulas
 */
class Alumno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alumno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'mail', 'passw'], 'required'],
            [['nombre'], 'string', 'max' => 40],
            [['mail'], 'string', 'max' => 30],
            [['passw'], 'string', 'max' => 15],
            [['mail'],'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_alumno' => 'Identificador',
            'nombre' => 'Nombre y Apellido',
            'mail' => 'Correo Electrónico',
            'passw' => 'Contraseña',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAulas()
    {
        return $this->hasMany(Aula::className(), ['id_alumno' => 'id_alumno']);
    }

    /**
     * {@inheritdoc}
     * @return AlumnoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AlumnoQuery(get_called_class());
    }
}
