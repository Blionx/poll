<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Encuestas;
use App\Preguntas;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $this->call('UserTableSeeder');

        $this->command->info('Encuestas y preguntas seeded!');
    }
}
	class UserTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('encuestas')->truncate();
    	DB::table('preguntas')->truncate();

        Encuestas::create([
        	'name' => 'Encuesta de prueba',
        	'created_at' => '0000-00-00 00:00:00',
        	'updated_at' => '0000-00-00 00:00:00',
        	'status' => 'E'
        	]);
        Preguntas::create([
        	'name' => 'Cuantos años Tienes?',
        	'encuestas_id'=>'1',
        	'created_at' => '0000-00-00 00:00:00',
        	'updated_at' => '0000-00-00 00:00:00',
        	'status' => 'E'
        	]);
        Preguntas::create([
        	'name' => 'Cual es tu color favorito?',
        	'encuestas_id'=>'1',
        	'created_at' => '0000-00-00 00:00:00',
        	'updated_at' => '0000-00-00 00:00:00',
        	'status' => 'E'
        	]);
        Preguntas::create([
        	'name' => 'Cual es tu comida favorita?',
        	'encuestas_id'=>'1',
        	'created_at' => '0000-00-00 00:00:00',
        	'updated_at' => '0000-00-00 00:00:00',
        	'status' => 'E'
        	]);
    }

}
