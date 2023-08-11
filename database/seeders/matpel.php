<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class matpel extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id'=>1,'nama_mapel'=>'ipa','guru_id'=>3],
            ['id'=>2,'nama_mapel'=>'Cloud computing','guru_id'=>2],
            ['id'=>3,'nama_mapel'=>'Programming','guru_id'=>1],
        ];
        DB::table('matpel')->insert($data); 
    }
}
