<?php

use yii\db\Migration;

/**
 * Handles the creation of table `autos`.
 */
class m180523_230441_create_autos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('autos', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'marca' => $this->string(),
            'color' => $this->string(),
            'modelo' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('autos');
    }
}
