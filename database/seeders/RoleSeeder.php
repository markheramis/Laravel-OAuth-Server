<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create([
            'name' => 'User',
        ]);
        $moderator = Role::create([
            'name' => 'Moderator',
        ]);
        $subscriber = Role::create([
            'name' => 'Subscriber',
        ]);
        $admin->users()->attach(User::find(1));
        $moderator->users()->attach(User::whereIn('id', [2, 3])->get());
        $subscriber->users()->attach(User::whereIn('id', [4, 5, 6, 7, 8, 9, 10])->get());
    }
}
