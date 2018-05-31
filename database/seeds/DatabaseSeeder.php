<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$this->call(CountriesSeeder::class );
		$this->call(UserTableSeeder::class );
		$this->call(WorkflowTableSeeder::class );
		$this->call(CitiesTableSeeder::class );
		$this->call(NeighborhoodTableSeeder::class );
	}

}
