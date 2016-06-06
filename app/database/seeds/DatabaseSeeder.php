<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		DB::table('posts')->delete();
		DB::table('users')->delete();

		$this->call('UserTableSeeder');
		$this->call('PostTableSeeder');

	}

}
