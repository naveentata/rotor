<?php

use Phinx\Migration\AbstractMigration;

class CreateAdmlogTable extends AbstractMigration
{
    /**
     * Migrate Change.
     */
    public function change()
    {
        $table = $this->table('admlog', ['collation' => 'utf8mb4_unicode_ci']);
        $table->addColumn('user', 'string', ['limit' => 20])
            ->addColumn('request', 'string', ['default' => ''])
            ->addColumn('referer', 'string', ['default' => ''])
            ->addColumn('ip', 'string', ['limit' => 15])
            ->addColumn('brow', 'string', ['limit' => 25])
            ->addColumn('time', 'integer')
            ->create();
    }
}
