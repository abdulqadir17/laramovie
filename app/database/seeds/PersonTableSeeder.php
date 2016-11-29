<?php

/**
* Person Table Seeder
*/
class PersonTableSeeder extends Seeder
{
	
	public function run()
	{
		// DB::table('people')->truncate();

		$faker = Faker\Factory::create();

		for ($i=0; $i < 10 ; $i++) { 
			$personName = $faker->firstName;	

			Person::create([
				'person_name' => $personName,
				'slug' => Str::slug($personName),
				'fullname' => $faker->name
			]);
		}
	}

}