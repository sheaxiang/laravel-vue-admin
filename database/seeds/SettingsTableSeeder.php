<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '网站名称',
                'setting_key' => 'site_name',
                'value' => '',
                'created_at' => NULL,
                'updated_at' => '2019-08-07 16:32:47',
                'input_type' => 'text',
                'type' => 1,
                'tip' => '',
                'order' => 100,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => '后台网址后缀',
                'setting_key' => 'backend_suffix',
                'value' => 'admin',
                'created_at' => NULL,
                'updated_at' => '2019-07-19 15:45:08',
                'input_type' => 'text',
                'type' => 1,
                'tip' => '请勿随意修改',
                'order' => 99,
            ),
            2 => 
            array (
                'id' => 9,
                'name' => '前台主题',
                'setting_key' => 'theme',
                'value' => 'demo',
                'created_at' => NULL,
                'updated_at' => '2019-03-21 10:26:16',
                'input_type' => 'select',
                'type' => 0,
                'tip' => NULL,
                'order' => 1,
            ),
        ));
        
        
    }
}
