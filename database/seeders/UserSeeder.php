<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['email' => 'admin@mtceeduhub.com'],[
            'fullname'  => 'Super Admin',
            'category'  => 'super-admin',
            'password'  => Hash::make('admin'),
            'phone_number'  => '+234 802 989 4444 ',
            'status'    => true
        ]);
    }
}
