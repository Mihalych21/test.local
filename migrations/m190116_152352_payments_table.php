<?php

use yii\db\Migration;

/**
 * Class m190116_152352_payments_table
 */
class m190116_152352_payments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('payments_table', [
            'id' =>  $this->primaryKey(),
            'name' => $this->string(),
            'address' => $this->string(),
            'inn' => $this->string(),
            'kpp' => $this->string(),
            'rschet' => $this->string(),
            'kschet' => $this->string(),
            'bik' => $this->string(),
            'bank' => $this->string(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('payments_table');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190116_152352_payments_table cannot be reverted.\n";

        return false;
    }
    */
}
