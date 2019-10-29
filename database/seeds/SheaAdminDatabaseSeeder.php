<?php

use Illuminate\Database\Seeder;

class SheaAdminDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuRoleTableSeeder::class);
        $this->call(ColumnsTableSeeder::class);
        $this->call(AdsTableSeeder::class);
        $this->call(AdminUsersTableSeeder::class);
        $this->call(AdClassesTableSeeder::class);
    }
}
