<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'admin',
            'email'    => 'admin@admin.com',
            'password'   =>  Hash::make('admin'),
            'admin'        => true,
        ]);

        User::create([
            'name'    => 'xavi',
            'email'    => 'xavi@xavi.com',
            'password'   =>  Hash::make('xavi'),
            'admin'        => false,
        ]);
    }
}
