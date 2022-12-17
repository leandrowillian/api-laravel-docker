<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     private $clientes = [
        [
            "nome" => "Nome cliente 01. atualizados",
            "telefone" => "31999999999",
            "cpf" => "05319626010",
            "placa_carro" => "CDN8241"
        ],
        [
            "nome" => "Nome cliente 02",
            "telefone" => "31888888888",
            "cpf" => "93347983009",
            "placa_carro" => "MWC6210"
        ],
        [
            "nome" => "Nome cliente 03",
            "telefone" => "31777777777",
            "cpf" => "16028788031",
            "placa_carro" => "HQH7291"
        ]
     ];

    public function run()
    {
        foreach ($this->clientes as $key => $value) {
            DB::table('clientes')->insert([
                'nome' => $value["nome"],
                'telefone' => $value["telefone"],
                'cpf' => $value["cpf"],
                'placa_carro' => $value["placa_carro"],
            ]);
        }
    }
}
