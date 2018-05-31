<?php

use Illuminate\Database\Seeder;

class NeighborhoodTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//delete neighborhoods table records
		DB::table('neighborhood')->delete();

		//insert neighborhoods records
		DB::table('neighborhood')->insert(array(
				array('name' => 'Автокоманда'),
				array('name' => 'Аеродром'),
				array('name' => 'Бутел I '),
				array('name' => 'Бутел II'),
				array('name' => 'Влае'),
				array('name' => 'Водно'),
				array('name' => 'Волково'),
				array('name' => 'Гази Баба'),
				array('name' => 'Горно Лисиче'),
				array('name' => 'Илинден'),
				array('name' => 'Јане Сандански'),
				array('name' => 'Капиштец'),
				array('name' => 'Гоце Делчев'),
				array('name' => 'Даме Груев'),
				array('name' => 'Дебар Маало'),
				array('name' => 'Дексион'),
				array('name' => 'Драчево'),
				array('name' => 'Ѓорче Петров'),
				array('name' => 'Жданец'),
				array('name' => 'Железара'),
				array('name' => 'Злокуќани'),
				array('name' => 'Карпош I'),
				array('name' => 'Карпош II'),
				array('name' => 'Карпош III'),
				array('name' => 'Карпош IV'),
				array('name' => 'Кисела Вода'),
				array('name' => 'Кисела Јабука'),
				array('name' => 'Козле'),
				array('name' => 'Колонија Идризово'),
				array('name' => 'Крњево'),
				array('name' => 'Лисиче'),
				array('name' => 'Ченто (Сингелиќ)'),
				array('name' => 'Маџари'),
				array('name' => 'Маџир Маало'),
				array('name' => 'Миладиновци'),
				array('name' => 'Мичурин'),
				array('name' => 'Момин Поток'),
				array('name' => 'Ново Лисиче'),
				array('name' => 'Пинтија'),
				array('name' => 'Острово'),
				array('name' => 'Пржино'),
				array('name' => 'Припор'),
				array('name' => 'Пролет'),
				array('name' => 'Радишани'),
				array('name' => 'Скопје Север'),
				array('name' => 'Сопиште'),
				array('name' => 'Стајковци'),
				array('name' => 'Тафталиџе'),
				array('name' => 'Топанско Поле'),
				array('name' => 'Ќерамидница'),
				array('name' => 'Хиподром'),
				array('name' => 'Центар'),
				array('name' => 'Црниче'),
				array('name' => 'Чаир'),
				array('name' => 'Шуто Оризари'),

			));
	}
}
