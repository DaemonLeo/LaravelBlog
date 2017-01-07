<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
			'name'=>'admin1',
			'email'=>'admin1@site.ru',
			'password'=>bcrypt('pass'),
		]);
    }
}
