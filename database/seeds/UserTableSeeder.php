<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        App\User::create([
            'name' => 'admin',
            'email' =>'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
