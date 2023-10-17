<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
        ];

        DB::beginTransaction();
        try {
            $user1 = User::create(array_merge([
                'email' => 'user1@gmail.com',
                'name' => 'user satu',
            ], $default_user_value));

            $user2 = User::create(array_merge([
                'email' => 'user2@gmail.com',
                'name' => 'user dua',
            ], $default_user_value));

            $user3 = User::create(array_merge([
                'email' => 'user3@gmail.com',
                'name' => 'user tiga',
            ], $default_user_value));

            $user4 = User::create(array_merge([
                'email' => 'user4@gmail.com',
                'name' => 'user empat',
            ], $default_user_value));

            $roleSuperAdmin = Role::create(['name' => 'super admin']);

            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);

            $roleSuperAdmin->givePermissionTo('read role');
            $roleSuperAdmin->givePermissionTo('create role');
            $roleSuperAdmin->givePermissionTo('update role');
            $roleSuperAdmin->givePermissionTo('delete role');

            $user1->assignRole('super admin');

            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
        }
    }
}
