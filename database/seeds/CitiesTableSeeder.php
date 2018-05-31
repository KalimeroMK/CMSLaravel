<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//delete cities table records
		DB::table('cities')->delete();

		//insert cities records
		DB::table('cities')->insert(array(
				array('name' => 'Берово'),
				array('name' => 'Делчево'),
				array('name' => 'Демир Капија'),
				array('name' => 'Гевгелија'),
				array('name' => 'Кичево'),
				array('name' => 'Кочани'),
				array('name' => 'Кратово'),
				array('name' => 'Крива Паланка'),
				array('name' => 'Крушево'),
				array('name' => 'Македонска Каменица'),
				array('name' => 'Неготино'),
				array('name' => 'Пехчево'),
				array('name' => 'Пробиштип'),
				array('name' => 'Радовиш'),
				array('name' => 'Ресен'),
				array('name' => 'Штип'),
				array('name' => 'Свети Николе'),
				array('name' => 'Дебар'),
				array('name' => 'Демир Хисар'),
				array('name' => 'Гостивар'),
				array('name' => 'Кавадарци'),
				array('name' => 'Куманово'),
				array('name' => 'Македонаски Брод'),
				array('name' => 'Охрид'),
				array('name' => 'Прилеп'),
				array('name' => 'Дојран'),
				array('name' => 'Струга'),
				array('name' => 'Струмица'),
				array('name' => 'Тетово'),
				array('name' => 'Валандово'),
				array('name' => 'Велес'),
				array('name' => 'Виница'),
				array('name' => 'Скопје'),

			));
	}
}
