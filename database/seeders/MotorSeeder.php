<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Motor;

class MotorSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_produk' => 'Honda PCX 160 ABS',
                'spesifikasi' => 'Mesin 160cc eSP+, Rem ABS 1 Channel, Honda Smart Key System.',
                'jumlah_produk' => 5,
                'harga_produk' => 36000000,
            ],
            [
                'nama_produk' => 'Yamaha NMAX 155 Connected',
                'spesifikasi' => 'Mesin 155cc VVA, Y-Connect, Traction Control System (TCS).',
                'jumlah_produk' => 8,
                'harga_produk' => 33500000,
            ],
            [
                'nama_produk' => 'Vespa Sprint 150 i-get ABS',
                'spesifikasi' => 'Mesin 150cc i-get, Rem ABS, Desain klasik sporty, Lampu LED.',
                'jumlah_produk' => 3,
                'harga_produk' => 54000000,
            ]
        ];

        foreach ($data as $item) {
            Motor::create($item);
        }
    }
}