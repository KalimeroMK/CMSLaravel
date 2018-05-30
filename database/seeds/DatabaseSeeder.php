<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$this->call('CountriesSeeder');
		$this->call(UserTableSeeder::class );
		$this->call('WorkflowTableSeeder');
		$this->call('CitiesTableSeeder');
		$this->call('NeighborhoodTableSeeder');
	}

}
