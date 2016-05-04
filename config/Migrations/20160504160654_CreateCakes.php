<?php
use Migrations\AbstractMigration;

class CreateCakes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('cakes');

        $table->addColumn('type', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);

        $table->addColumn('occasion', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);

        $table->addColumn('icing', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);

        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('layers', 'integer', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);

        $table->create();
    }
}