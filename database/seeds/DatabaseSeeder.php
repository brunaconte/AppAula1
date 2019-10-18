<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO alunos(nome, curso, turma) VALUES(?, ?, ?)',
            array('João Paulo', 'ALIM', 'MEC'));
        DB::insert('INSERT INTO alunos(nome, curso, turma) VALUES(?, ?, ?)',
            array('Mariana', 'INFO', 'INFO2'));
        DB::insert('INSERT INTO curso_models(nome, abreviatura) VALUES(?, ?)',
            array('TÉCNICO EM MECÂNICA', 'MEC'));
        DB::insert('INSERT INTO curso_models(nome, abreviatura) VALUES(?, ?)',
            array('TÉCNICO EM INFORMÁTICA', 'INFO'));
    }
}
