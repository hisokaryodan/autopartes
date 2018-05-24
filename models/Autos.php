<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "autos".
 *
 * @property int $id
 * @property string $nombre
 * @property string $marca
 * @property string $color
 * @property int $modelo
 *
 * @property Partes[] $partes
 */
class Autos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'autos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['modelo'], 'default', 'value' => null],
            [['modelo'], 'integer'],
            [['nombre', 'marca', 'color'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'marca' => 'Marca',
            'color' => 'Color',
            'modelo' => 'Modelo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPartes()
    {
        return $this->hasMany(Partes::className(), ['auto_id' => 'id']);
    }
}
