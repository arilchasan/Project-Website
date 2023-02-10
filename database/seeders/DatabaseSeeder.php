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

        //insert data ke table sepedas
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
            
            
        );


        //insert data ke table aksesoris
        DB::table('aksesoris')->insert(array(
          array(
                'image' => 'image/aks/blackburn.jpg',
                'nama' => 'Blackburn Grid Medium Seat Bag',
                'harga' => 'Rp 315.000',
                'desc' => 'Tas ini semuanya memiliki saku internal kecil untuk membantu Anda tetap teratur, dan bagian dalam belakang memiliki warna yang lebih terang untuk memudahkan menemukan alat di dalamnya dengan cepat.'
                ),
          array(
                'image' => 'image/aks/btlmnm.jpg',
                'nama' => 'Elite Tempat Botol Minum Sepeda Cannibal XC Skin',
                'harga' => 'Rp 228.000',
                'desc' => 'Desain tempat botol minum yang inovatif memungkinkan pesepeda untuk mengambil botol dari samping maupun depan. Terbuat dari material polimer yang diperkuat dengan serat agar bottle cage tahan lama. Yang menarik, desain Elite Bottle Cage Sepeda Cannibal XC Skin ini yang tampak lebih modern dan elegan. Elite Bottle Cage Sepeda Cannibal XC Skin juga dilengkapi dengan bahan karet elastomer yang dapat menjaga botol agar tidak mudah lepas atau terjatuh dari tempatnya.'
                ),
          array(
                'image' => 'image/aks/cateye.jpg',
                'nama' => 'Cateye Lampu Depan Sepeda Volt6000 EL6000RC',
                'harga' => 'Rp 5.998.000',
                'desc' => 'Kelas lampu depan paling bertenaga di dunia adalah sesuatu yang harus Anda alami untuk dipercaya.
                6000 lumens mengubah gelap menjadi siang hari untuk pengalaman berkendara malam yang tak tertandingi. Satu lagi dalam rangkaian panjang pertama CatEye, dari lampu berkedip pertama pada tahun 1964 hingga lampu depan LED pertama pada tahun 2001 hingga lampu depan paling terang di dunia pada tahun 2015, kami terus mendorong batasan elektronik sepeda. '
                ),
          array(
                'image' => 'image/aks/knjgspd.jpg',
                'nama' => 'DEEMOUNT Keranjang Sepeda Strorage',
                'harga' => 'Rp 85.000',
                'desc' => 'Keranjang ini dapat membantu Anda membawa barang, khususnya jika Anda sering beraktivitas dengan sepeda. Memiliki kapasitas besar dan material berkualitas, keranjang ini bisa jadi solusi penyimpanan barang saat perjalanan. Keranjang barang ini cocok untuk Anda yang memiliki mobilitas tinggi menggunakan sepeda.'
                ),
          array(
                'image' => 'image/aks/MT15.jpg',
                'nama' => 'Entity Bicycle MT15 12 Functions Multitool',
                'harga' => 'Rp 160.000',
                'desc' => 'Multi-alat harus dimiliki oleh setiap pengendara sepeda, terlepas dari berapa lama Anda berencana untuk bersepeda. Entity MT15 Multi-Tool dengan 12 Fungsi menampilkan semua kunci hex standar, pemutus rantai, tuas ban, T25, obeng Phillips, dan obeng flathead.
                '
                ),
          array(
                'image' => 'image/aks/topenk.jpg',
                'nama' => 'Topeak Stand Sepeda Prepstand Elite',
                'harga' => 'Rp 3.798.000',
                'desc' => 'Topeak Presptand Elite merupakan professional workstand dengan tempat komponen yang dapat dibuka tutup. Kaki tripod yang stabil dan dapat dilipat sehingga praktis dibawa bepergian serta ringkas disimpan saat tidak digunakan. Dilengkapi clamp lever tambahan untuk mengencangkan / melepaskan clamp dengan mudah. Kepala clamp dapat berputar 360˚ dan memiliki non-marring rubber jaws. Termasuk tas jinjing untuk penyimpanan dan bepergian.'
                ),
                
        ));
}
}