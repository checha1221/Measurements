<?php
use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()    {
        $table =$this->table('users');
        $table->addColumn('first_name', 'string',array('limit'=>100))
              ->addColumn('last_name', 'string',array('limit'=>100))
              ->addColumn('gender', 'enum', array('values'=>'M, F'))
              ->addColumn('birthdate', 'date')
              ->addColumn('email', 'string',array('limit'=>100))
              ->addColumn('phone', 'integer')
              ->addColumn('nickname', 'string',array('limit'=>100))
              ->addColumn('password', 'string')
              ->addColumn('role', 'enum', array('values'=> 'admin, user, coach'))
              ->addColumn('active', 'boolean')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();
    }
    //tabla usuarios 
}
