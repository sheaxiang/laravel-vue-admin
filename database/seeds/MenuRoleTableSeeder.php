<?php

use Illuminate\Database\Seeder;

class MenuRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_role')->delete();
        
        \DB::table('menu_role')->insert(array (
            0 => 
            array (
                'menu_id' => 6,
                'role_id' => 1,
            ),
            1 => 
            array (
                'menu_id' => 7,
                'role_id' => 1,
            ),
            2 => 
            array (
                'menu_id' => 8,
                'role_id' => 1,
            ),
            3 => 
            array (
                'menu_id' => 9,
                'role_id' => 1,
            ),
            4 => 
            array (
                'menu_id' => 10,
                'role_id' => 1,
            ),
            5 => 
            array (
                'menu_id' => 55,
                'role_id' => 2,
            ),
            6 => 
            array (
                'menu_id' => 56,
                'role_id' => 2,
            ),
        ));
        
        
    }
}