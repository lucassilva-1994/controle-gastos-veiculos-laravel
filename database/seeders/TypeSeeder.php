<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    public function run()
    {
        $names = [
          "Troca de óleo",
            "Manutenção",
            "Abastecimento",
            "Revisão",
            "Troca de peça",
            "Documentação",
            "Limpeza"
        ];        
        foreach($names as $name){
            Type::create(['name'=>$name]);
        }
    }
}
