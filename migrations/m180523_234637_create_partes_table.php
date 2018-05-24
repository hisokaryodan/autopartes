<?php

use yii\db\Migration;

/**
 * Handles the creation of table `partes`.
 * Has foreign keys to the tables:
 *
 * - `autos`
 */
class m180523_234637_create_partes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('partes', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(),
            'color' => $this->string(),
            'auto_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `auto_id`
        $this->createIndex(
            'idx-partes-auto_id',
            'partes',
            'auto_id'
        );

        // add foreign key for table `autos`
        $this->addForeignKey(
            'fk-partes-auto_id',
            'partes',
            'auto_id',
            'autos',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `autos`
        $this->dropForeignKey(
            'fk-partes-auto_id',
            'partes'
        );

        // drops index for column `auto_id`
        $this->dropIndex(
            'idx-partes-auto_id',
            'partes'
        );

        $this->dropTable('partes');
    }
}
