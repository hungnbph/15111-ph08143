<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('sv')->count()===0){
        	DB::table('sv')->insert([
                [
        		'name'=>'nguyen van a',       		
        		'is_active'=>true,

 

                ],
            ]);
    }
    else {
        echo 'Bang students da co du lieu' . PHP_EOL;
    }
}
}
