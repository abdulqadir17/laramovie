<?php

/**
* User Table Seeder
*/
class UserTableSeeder extends Seeder
{
	
	public function run()
	{
		DB::table('users')->truncate();

		$faker = Faker\Factory::create();

		for ($i=0; $i < 10 ; $i++) { 
			User::create([
				'name' => $faker->firstName,
				'email' => $faker->safeEmail,
				'password' => Hash::make('abc123')
				]);
		}
	}
}