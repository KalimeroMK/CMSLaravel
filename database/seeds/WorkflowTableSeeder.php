<?php

use Illuminate\Database\Seeder;

class WorkflowTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('workflow')->insert([
				[
					'id'    => 1,
					'name'  => 'Published',
					'color' => 'colored-palegreen',
				],
				[
					'id'    => 2,
					'name'  => 'Waiting',
					'color' => 'colored-orange',
				],
			]);
	}
}