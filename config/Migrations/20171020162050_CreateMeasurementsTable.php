<?php
use Migrations\AbstractMigration;

class CreateMeasurementsTable extends AbstractMigration
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
         $table =$this->table('measuremet');
        $table
              ->addColumn('weight','integer')
              ->addColumn('grease','integer')
              ->addColumn('muscle','integer')
              ->addColumn('belly','integer')
              ->addColumn('leftforearm','integer')
              ->addColumn('rightforearm','integer')
              ->addColumn('shouders','integer')
              ->addColumn('leftarm','integer')
              ->addColumn('rightarm','integer')
              ->addColumn('chest','integer')
              ->addColumn('waist','integer')
              ->addColumn('hip','integer')
              ->addColumn('leftleg','integer')
              ->addColumn('rightleg','integer')
              ->addColumn('leftcalf','integer')
              ->addColumn('rightcalf','integer')
              ->addColumn('active', 'boolean')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();

              $refTable = $this->table('measuremet');
                  $refTable->addColumn('user_id','integer',array('signed' => 'disable'))
                 ->addForeignKey('user_id', 'users', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                  
                ->update();
    }
    //body measuremet table
}
