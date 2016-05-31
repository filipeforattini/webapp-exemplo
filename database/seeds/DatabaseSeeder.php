<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FabricantesSeeder::class);
        $this->call(ProdutosSeeder::class);
    }
}
