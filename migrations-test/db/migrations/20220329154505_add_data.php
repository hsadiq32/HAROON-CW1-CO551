<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddData extends AbstractMigration
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
    public function up()
    {
        $rows = [
            [
              'id'    => 1,
              'int_column'    => 400,
              'string_column'    => 'John',
              'datetime_column'  => '2022-01-11 01:23:44'
            ],
            [
                'id'    => 2,
                'int_column'    => 4,
                'string_column'    => 'Mark',
                'datetime_column'  => '2015-12-29 09:55:45'
            ],
            [
              'id'    => 3,
              'int_column'    => 299,
              'string_column'    => 'Jane',
              'datetime_column'  => '2012-05-07 15:13:24'
            ]
        ];
        $this->insert('new_table', $rows);
    }
    public function down()
    {
        $this->execute('DELETE FROM new_table');
    }
}