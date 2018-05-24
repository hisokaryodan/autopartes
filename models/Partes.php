<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partes".
 *
 * @property int $id
 * @property string $nombre
 * @property string $color
 * @property int $auto_id
 *
 * @property Autos $auto
 */
class Partes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['auto_id'], 'required'],
            [['auto_id'], 'default', 'value' => null],
            [['auto_id'], 'integer'],
            [['nombre', 'color'], 'string', 'max' => 255],
            [['auto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Autos::className(), 'targetAttribute' => ['auto_id' => 'id']],
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
            'color' => 'Color',
            'auto_id' => 'Auto ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuto()
    {
        return $this->hasOne(Autos::className(), ['id' => 'auto_id']);
    }
}
