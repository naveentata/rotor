<?php

use Phinx\Migration\AbstractMigration;

class ConvertTablesInnodb extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $tables = $this->fetchAll('SHOW FULL TABLES');
        foreach ($tables as $table) {
            $this->execute("ALTER TABLE `".$table[0]."` ENGINE=InnoDB;");
        }
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $tables = $this->fetchAll('SHOW FULL TABLES');
        foreach ($tables as $table) {
            $this->execute("ALTER TABLE `".$table[0]."` ENGINE=MyISAM;");
        }
    }
}
