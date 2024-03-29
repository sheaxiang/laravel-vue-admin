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
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuRoleTableSeeder::class);
        $this->call(AdminUsersTableSeeder::class);
    }
}
