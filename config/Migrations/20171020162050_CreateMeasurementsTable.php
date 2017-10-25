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
              ->addColumn('weight','float')
              ->addColumn('grease','float')
              ->addColumn('muscle','float')
              ->addColumn('belly','float')
              ->addColumn('leftforearm','float')
              ->addColumn('rightforearm','float')
              ->addColumn('shouders','float')
              ->addColumn('leftarm','float')
              ->addColumn('rightarm','float')
              ->addColumn('chest','float')
              ->addColumn('waist','float')
              ->addColumn('hip','float')
              ->addColumn('leftleg','float')
              ->addColumn('rightleg','float')
              ->addColumn('leftcalf','float')
              ->addColumn('rightcalf','float')
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
