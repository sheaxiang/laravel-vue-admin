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
                'name' => 'admin',
                'password' => bcrypt('admin'),
                'is_prohibit' => 2,
                'deleted_at' => NULL,
            ),
        ));


    }
}
