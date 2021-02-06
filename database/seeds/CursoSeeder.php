<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $dhAtual = Carbon::now();
        DB::table('cursos')->insert(
            [
                [
                    'id' => '1',
                    'titulo' => 'Curso de PHP',
                    'descricao' => 'Você irá aprender a desenvolver em PHP e evoluir suas habilidades!',
                    'imagem'=>'img/cursos/php.png',
                    'valor'=>'80',
                    'publicado'=>'sim',
                    'created_at'=>$dhAtual,
                    'updated_at' => $dhAtual,
                ],
               
            ]
        );
    }
}
