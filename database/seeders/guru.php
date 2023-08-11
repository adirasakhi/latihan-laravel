<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class guru extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id'=>1,'nama_guru'=>'daffa','alamat_guru'=>'intan regency','umur'=>25],
            ['id'=>2,'nama_guru'=>'dzaki','alamat_guru'=>'jalan merdeka','umur'=>26],
            ['id'=>3,'nama_guru'=>'fajril','alamat_guru'=>'kerkop','umur'=>27],
        ];
        DB::table('guru')->insert($data); 
    }
}
