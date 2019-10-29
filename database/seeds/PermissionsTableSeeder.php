<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'add',
                'guard_name' => 'admin',
                'created_at' => '2018-12-10 16:49:55',
                'updated_at' => '2018-12-10 16:49:55',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'update',
                'guard_name' => 'admin',
                'created_at' => '2018-12-10 16:58:05',
                'updated_at' => '2018-12-10 16:58:05',
            ),
        ));


    }
}
