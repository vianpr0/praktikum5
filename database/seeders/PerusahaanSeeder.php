<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perusahaan;
class PerusahaanSeeder extends Seeder
{
public function run()
{
Perusahaan::create([
'nama' => 'PT. Teknologi Indonesia',
'alamat' => 'Jl. Merdeka No. 123, Jakarta',
'email' => 'info@teknologi.co.id',
'telepon' => '021-1234567'
]);
Perusahaan::create([
'nama' => 'CV. Inovasi Kreatif',
'alamat' => 'Jl. Soekarno-Hatta No. 456, Bandung',
'email' => 'contact@inovasi.co.id',
'telepon' => '022-7654321'
]);
Perusahaan::create([
'nama' => 'PT. Solusi Digital',
'alamat' => 'Jl. Imam Bonjol No. 789, Surabaya',
'email' => 'solusi@digital.co.id',
'telepon' => '031-9876543'
]);
}
}
