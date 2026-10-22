<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Motor;

class MotorSeeder extends Seeder
{
    public function run(): void
    {
        // Menghapus data dummy sebelumnya
        Motor::truncate();

        $data = [
            [
                'nama_produk' => 'Kawasaki Ninja ZX-25R ABS SE',
                'spesifikasi' => 'Mesin 249.8cc, 4-silinder segaris, DOHC, 16-katup, pendingin cairan. Tenaga maksimal 51 PS pada 15.500 rpm (dengan Ram Air). Dilengkapi fitur canggih Kawasaki Traction Control (KTRC) dan Quick Shifter (KQS) dua arah.',
                'jumlah_produk' => 150,
                'harga_produk' => 125700000,
            ],
            [
                'nama_produk' => 'Ducati Panigale V4 S',
                'spesifikasi' => 'Superbike beringas dengan mesin Desmosedici Stradale V4 1.103cc turunan MotoGP. Tenaga 215,5 hp pada 13.000 rpm. Dibekali suspensi elektronik Öhlins Smart EC 2.0, pelek forged aluminium, dan sistem aerodinamika winglet.',
                'jumlah_produk' => 150,
                'harga_produk' => 1200000000,
            ],
            [
                'nama_produk' => 'BMW S 1000 RR M Package',
                'spesifikasi' => 'Mesin 999cc, 4-silinder segaris dengan teknologi BMW ShiftCam. Tenaga 210 hp pada 13.750 rpm. Varian M Package dilengkapi velg M Carbon, jok M sport, rem cakram M, dan 4 mode berkendara (Rain, Road, Dynamic, Race).',
                'jumlah_produk' => 150,
                'harga_produk' => 900000000,
            ],
            [
                'nama_produk' => 'Honda CBR250RR SP Quick Shifter',
                'spesifikasi' => 'Sportbike agresif bermesin 249,7cc, 2-silinder segaris, 8-katup. Tenaga 42 PS pada 13.000 rpm. Dilengkapi fitur Throttle By Wire dengan 3 mode berkendara, Assist/Slipper Clutch, dan Quick Shifter untuk perpindahan gigi instan.',
                'jumlah_produk' => 150,
                'harga_produk' => 80000000,
            ],
            [
                'nama_produk' => 'Yamaha YZF-R1M',
                'spesifikasi' => 'Motor supersport kasta tertinggi Yamaha. Mesin 998cc CP4 (Crossplane). Tenaga 200 PS. Menggunakan bodi full serat karbon, Electronic Racing Suspension (ERS) dari Öhlins, dan sistem navigasi/telemetri CCU berbasis GPS terintegrasi.',
                'jumlah_produk' => 150,
                'harga_produk' => 812000000,
            ]
        ];

        foreach ($data as $item) {
            Motor::create($item);
        }
    }
}