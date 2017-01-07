<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; 

class MenuAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_admin')->insert([
			'name'      =>'Управление меню',
			'url'       =>'menu',
            'icon'      =>'fa fa-bars',
			'permission'=>'1',
			'created_at'=> Carbon::now(),
		]);
    }
}
