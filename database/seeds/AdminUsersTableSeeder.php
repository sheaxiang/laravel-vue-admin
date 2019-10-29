<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'password' => '$2y$10$jqJ84eucX1N3n5wQ7UPou.agBIIVgpwbMGk1AMc.bN/sNSGUeBPxm',
                'created_at' => '2018-09-27 14:48:47',
                'updated_at' => '2019-08-19 15:36:54',
                'is_prohibit' => 2,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}