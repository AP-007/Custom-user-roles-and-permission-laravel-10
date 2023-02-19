<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User Table
        $users = [
            [
                "name" => "Admin",
                "email" => "admin@example.com",
                "password" => Hash::make('password'),
            ],
            [
                "name" => "User",
                "email" => "user@example.com",
                "password" => Hash::make('password'),
            ],
            [
                "name" => "Editor",
                "email" => "editor@example.com",
                "password" => Hash::make('password'),
            ]
        ];
        User::insert($users);


        //Roles Table
        $roles = [
            [
                "name" => "Admin",
                "slug" => "admin",
            ],
            [
                "name" => "Editor",
                "slug" => "editor",
            ]
        ];
        Role::insert($roles);

        //Permission Table
        $permissions = [
            [
                "name" => "Add Post",
                "slug" => "add_post",
            ],
            [
                "name" => "Delete Post",
                "slug" => "delete_post",
            ]
        ];
        Permission::insert($permissions);
    }
}
