<?php

use App\SiteContato;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();

        $contato->nome = 'Sistema Super Gestão';
        $contato->telefone = '(69) 98888-5522';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato = '1';
        $contato->mensagem = 'Seja bem-vindo ao Sistema Super Gestão';
        $contato->save();
        */

        /*SiteContato::create([
            'nome' => 'Sistemas SG',
            'telefone' => '(69) 99999-8888',
            'email'=> 'contato_sg@gmail.com',
            'motivo' => '1',
            'mensagem' => 'Seja Bem-vindo ao Sistema Super Gestão'
        ]);*/

        factory(SiteContato::class, 100)->create();
        
    }
}
