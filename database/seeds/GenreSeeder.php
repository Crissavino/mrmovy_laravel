<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('genres')->insert([

        	[
        		'name' => 'Acción'
        	],

        	[
        		'name' => 'Ciencia Ficción'
        	],

        	[
        		'name' => 'Drama'
        	],

        	[
        		'name' => 'Terror'
        	],

        	[
        		'name' => 'Comedia'
        	],

        	[
        		'name' => 'Romantica'
        	],

        	[
        		'name' => 'Thriller'
        	],

        	[
        		'name' => 'Misterio'
        	],

        	[
        		'name' => 'Suspenso'
        	],

        	[
        		'name' => 'Animación'
        	],

        	[
        		'name' => 'Aventura'
        	],

        	[
        		'name' => 'Fantasía'
        	],

        	[
        		'name' => 'Documental'
        	],

        	[
        		'name' => 'Biografía'
        	],

        	[
        		'name' => 'Familiar'
        	],

        	[
        		'name' => 'Musical'
        	],

        	[
        		'name' => 'Guerra'
        	],

        	[
        		'name' => 'Western'
        	],


        ]);
    }
}
