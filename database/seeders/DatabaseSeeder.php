<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('sepedas')->insert(array(
            array(
                'image' => 'image/aquila.jpg',
                'merk' => '	AQUILA 2.0',
                'harga' => 'Rp 6.400.000',
                'desc' => 'AQUILA 2.0 dirancang untuk menempuh berbagai lintasan, termasuk off road ringan. MTB ini dibangun dari rangka berbahan alloy yang ringan dan kokoh serta dilengkapi dengan suspensi ganda untuk memberikan kenyamanan bagi penggunanya. dengan menggunaan ban lebar (27.5×2.40″), MTB ini memiliki traksi yang lebih baik saat di atas lintasan offroad.                ',
                ),
            array(
                    'image' => 'image/scappa.jpg',
                    'merk' => '	Genio Scappa 700C"',
                    'harga' => 'Rp 2.950.000',
                    'desc' => 'Kebebasan, berpetualang, dan cepat adalah kata kunci untuk sepeda Gravel Genio Scappa 2022. Mulai dari jalan beraspal, berkerikil, hingga off-road ringan adalah medan yang bisa dilalui oleh gravel bike. Berpetualang dalam kecepatan, maupun perjalanan jauh seharian di atas sadel, Scappa adalah kawan terbaikmu.',
                ),
            array(
                    'image' => 'image/dahon.jpeg',
                    'merk' => 'Dahon Ion Madison 20	',
                    'harga' => 'Rp 2.999.000',
                    'desc' => 'Sepeda Dahon Ion Madison dibekali dengan frame berbahan alloy, yang ringan dan tahan karat. menggunakan ukuran ban 20 inci, sepeda ini cocok untuk kalangan remaja dan dewasa. Untuk menunjang kemudahan pengendara, Dahon Ion Madison ini difasilitasi 7 pilihan kecepatan dari Shimano untuk menghadapi berbagai kondisi jalan dan memberi fleksibilitas dalam berkendara. Menggunakan rem cakram mekanik yang pakem. Pegangan sepeda yang berbentuk ergonomis menyesuaikan kontur genggaman telapak tangan untuk meningkatkan kenyamanan, terutama saat berkendara lama. Terdapat mounting pada bagian headtube yang bisa digunakan untuk front block. Dilengkapi dengan magnet yang kuat di bagian roda depan dan belakang, untuk menjaga sepeda terlipat dengan aman. Sepeda lipat 20 inci ini cukup ringkas dan praktis disimpan.',
                    ),
            array(
                    'image' => 'image/curved.jpg',
                    'merk' => 'Element Curved 700C"',
                    'harga' => 'Rp 6.525.000',
                    'desc' => '',
                    ),
            array(
                    'image' => 'image/thunder.jpg',
                    'merk' => 'Twitter Thunder Brake 700C"	',
                    'harga' => 'Rp 21.500.000',
                    'desc' => '',
                    ),
            array(
                    'image' => 'image/london.jpg	',
                    'merk' => 'London Taxi CRB M 700C"	',
                    'harga' => 'Rp 5.024.000',
                    'desc' => '',
                    ),
            array(
                    'image' => 'image/espana.jpg',
                    'merk' => 'United Espana 2 14"',
                    'harga' => 'Rp 6.000.000',
                    'desc' => '',
                    ),
            array(
                    'image' => 'image/gravel.jpg',
                    'merk' => 'Element FRC 38 Gravel 700C	',
                    'harga' => 'Rp 4.050.000',
                    'desc' => '',
                    ),
            array(
                    'image' => 'image/spdpasific.jpeg',
                    'merk' => 'Pacific Nimbuzz 14"',
                    'harga' => 'Rp 6.200.000',
                    'desc' => '',
                    ),
            array(
                    'image' => 'image/unBiru.jpg',
                    'merk' => 'United Stavros 27.5"',
                    'harga' => 'Rp 2.850.000',
                    'desc' => '',
                    ),
            array(
                    'image' => 'image/unHanzo.jpg ',
                    'merk' => 'United Hanzo',
                    'harga' => 'Rp 1.700.000',
                    'desc' => '',
                    ),
            array(
                    'image' => 'image/unTank.jpg',
                    'merk' => 'United Tank Discbrake',
                    'harga' => 'Rp 1.750.000',
                    'desc' => '',
                    ),
            
            ),
            
            
        );}
}
