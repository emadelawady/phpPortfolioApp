<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Settings extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        // create the table
        $table = $this->table('settings');

        $table->addColumn('setting_name', 'string')
                ->addColumn('head_one', 'string')
                ->addColumn('head_two', 'string')
                ->addColumn('description_one', 'string')
                ->addColumn('description_two', 'string')
                ->addColumn('custom_link_one', 'string')
                ->addColumn('custom_link_two', 'string')
                ->addColumn('custom_link_three', 'string')
                ->addColumn('custom_link_four', 'string')
                ->addColumn('custom_field_one', 'string')
                ->addColumn('custom_field_two', 'string')
                ->addColumn('custom_field_three', 'string')
                ->addColumn('custom_field_four', 'string')
                ->addColumn('custom_field_five', 'string')
                ->addColumn('custom_field_six', 'string')
                ->addColumn('custom_field_seven', 'string')
                ->addColumn('custom_field_eight', 'string')
                ->addColumn('feature_image_one', 'string')
                ->addColumn('feature_image_two', 'string')
                ->addTimestamps()
                ->create();
    

    }
}
