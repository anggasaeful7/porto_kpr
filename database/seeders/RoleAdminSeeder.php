<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create([
            "name"=> "admin",
        ]);

        $lenderRole = Role::create([
            "name"=> "lender",
        ]);

        $agentRole = Role::create([
            "name"=> "agent",
        ]);

        $customerRole = Role::create([
            "name"=> "customer",
        ]);

        $user = User::create([
            "name" => "Tim KPR",
            "email" => "admin@mail.com",
            "phone" => "08123456789",
            "photo" => "https://ui-avatars.com/api/?name=Tim+KPR&background=random",
            "password" => bcrypt("!2tiga2!"),
        ]);

        $user->assignRole($adminRole);
    }
}
