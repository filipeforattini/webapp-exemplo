<?php

use Illuminate\Database\Seeder;

use App\Produto;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) { 
        	factory('App\Produto')->create();
        }
    }
}
