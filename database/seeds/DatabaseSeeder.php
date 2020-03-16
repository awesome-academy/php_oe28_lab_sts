<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $data = [
            'username' => 'admin',
            'password' => bcrypt('admin'),
        ];
        DB::table('users')->insert($data);
    }
}
