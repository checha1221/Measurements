<?php
use Migrations\AbstractMigration;

class CreatePaymentsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
      $table =$this->table('payment');
        $table
              ->addColumn('description', 'enum', array( 'values' => 'week, fortnite, month, Sother'))
              ->addColumn('pay','float')
              ->addColumn('active', 'boolean')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();


              $refTable = $this->table('payment');
              $refTable->addColumn('user_id','integer',array('signed' => 'disable'))
                 ->addForeignKey('user_id', 'users', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
}

//payment table
    }



