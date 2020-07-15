<?php

use Illuminate\Database\Seeder;
use App\Models\CadastroPessoa;
use App\Models\CadastroDependente;

class CadastroPessoas extends Seeder
{
	private $pessoas;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(CadastroPessoa::class, 100)->create()->each(function($pessoa) {
            factory(CadastroDependente::class, 10)->create()
                ->each(function($dependente) use ($pessoa) {
                    $pessoa->dependentes()->save($dependente)->save();
                });
        });
    }
}
