<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        \DB::table('tags')->insert([

        	[
        		'name' => 'Dinero'
        	],

        	[
        		'name' => 'Desnudos'
        	], 

        	[
        		'name' => 'Disparos'
        	],

        	[
        		'name' => 'Casinos'
        	],

        	[
        		'name' => 'Mafia'
        	],

        	[
        		'name' => 'Holocausto'
        	],

        	[
        		'name' => 'Crimen'
        	],

        	[
        		'name' => 'Drogas'
        	],

        	[
        		'name' => 'Sangre'
        	],

        	[
        		'name' => 'Verídica'
        	],

        	[
        		'name' => 'Espíritus'
        	],

        	[
        		'name' => 'Aliens'
        	],

        	[
        		'name' => 'Carreras'
        	],

        	[
        		'name' => 'Pelea'
        	],


        ]);
    }
}
