<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Flynsarmy\CsvSeeder\CsvSeeder;

class MahasiswaTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'mahasiswas';
        $this->filename = base_path() . '/database/seeders/csv/Mahasiswa.csv';
        $this->should_trim = true;
        $this->timestamps = true;
        $this->created_at = now();
        $this->updated_at = now();
    }

    public function run()
    {
        parent::run();
    }
}
