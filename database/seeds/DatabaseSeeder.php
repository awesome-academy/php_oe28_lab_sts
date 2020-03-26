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
        $this->call(CreateCourse::class);
    }

}

class CreateCourse extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'course 1',
                'description' => 'description 1',
                'image' => 'image 1',
                'creator_id' => 1,
                'time' => '5',
            ],
            ['name' => 'course 2',
                'description' => 'description 2',
                'image' => 'image 2',
                'creator_id' => 1,
                'time' => '8',
            ],

        ];
        DB::table('courses')->insert($data);
    }

}

class CreateUser extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'password' => bcrypt('admin'),
        ];
        DB::table('users')->insert($data);
    }

}
