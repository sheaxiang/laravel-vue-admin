<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'guard_name' => 'admin',
                'created_at' => '2018-12-10 17:29:56',
                'updated_at' => '2018-12-10 17:29:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'guard_name' => 'admin',
                'created_at' => '2018-12-11 11:48:00',
                'updated_at' => '2018-12-11 11:48:00',
            ),
        ));
        
        
    }
}