<?php
use Illuminate\Database\Seeder;
use  \Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // call our class and run our seeds

        DB::table('armari_a')->insert([

          'id' => '2',
            'nom_armari' => 'armari A',
            'nom_producte' => 'Bosses puntes pipetes',
            'stock_inicial' => '4',
            'stock_actual' => '5',
            'proveedor' => 'PIDISCAT',
            'referencia_proveedor'=> '11971',
            'marca_equip' => 'null',
            'num_lot' => '0',

        ]);
        DB::table('armari_a')->insert([

            'id' => '3',
            'nom_armari' => 'armari A',
            'nom_producte' => 'Puntes micropipeta',
            'stock_inicial' => '17',
            'stock_actual' => '17',
            'proveedor' => 'PIDISCAT',
            'referencia_proveedor'=> '0',
            'marca_equip' => 'null',
            'num_lot' => '0',


        ]);


    }
}
