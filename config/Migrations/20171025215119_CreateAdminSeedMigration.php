<?php
use Migrations\AbstractMigration;
use Cake\Auth\DefaultPasswordHasher;


class CreateAdminSeedMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up(){

     $faker = \Faker\Factory::create();
     $populator =new Faker\ORM\CakePHP\Populator($faker);

     $populator->addEntity('Users', 1, [
        'first_name' => 'admin',
        'last_name'  => 'admin',
        'gender'     => 'M',
        'birthdate'  => '2017-10-25',
        'email'      => 'admin@admin.com',
        'phone'      =>'11111111',
        'nickname'   => 'admin',
        'password'   =>  function () {
            $hasher = new DefaultPasswordHasher();
            return $hasher->hash('secret');
        },
        'role'       => 'admin',
        'active'     => 1,
        'created'    => function () use ($faker){
            return $faker->dateTimeBetween($startDate = 'now', $senDate = 'now');
            },
        'modified'    => function () use ($faker){
            return $faker->dateTimeBetween($startDate = 'now', $senDate = 'now');
            }

    ]);
 $populator->execute();
    }
}
