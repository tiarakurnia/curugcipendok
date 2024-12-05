<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run()
    {
        Faq::create([
            'question' => 'Di mana lokasi Curug Cipendok?',
            'answer' => 'Curug Cipendok terletak di Desa Karangtengah, Kecamatan Cilongok, Kabupaten Banyumas, Jawa Tengah.',
        ]);

        Faq::create([
            'question' => 'Berapa harga tiket masuk ke Curug Cipendok?',
            'answer' => 'Harga tiket masuk ke Curug Cipendok adalah sekitar Rp 15.000 per orang.',
        ]);

        Faq::create([
            'question' => 'Pada pukul berapa Curug Cipendok dibuka untuk pengunjung?',
            'answer' => 'Curug Cipendok buka setiap hari dari pukul 08:00 hingga 17:00.',
        ]);
        
        Faq::create([
            'question' => 'Apakah ada fasilitas parkir di Curug Cipendok?',
            'answer' => 'Ya, tersedia fasilitas parkir yang luas untuk mobil dan motor di dekat area masuk.',
        ]);
        Faq::create([
            'question' => 'Berapa lama waktu perjalanan dari parkiran ke lokasi air terjun?',
            'answer' => 'Dari parkiran, pengunjung perlu berjalan kaki sekitar 15 menit untuk mencapai lokasi air terjun.',
        ]);
        Faq::create([
            'question' => 'Apa saja fasilitas yang tersedia di Curug Cipendok?',
            'answer' => 'Fasilitas yang tersedia meliputi warung makan, gazebo untuk istirahat, toilet, mushola, area berfoto, area camping, dan area bermain',
        ]);
        Faq::create([
            'question' => 'Apakah jalur menuju air terjun aman untuk anak-anak?',
            'answer' => 'Jalur menuju air terjun sudah cukup aman, namun tetap perlu pengawasan orang dewasa, terutama saat musim hujan karena bisa licin.',
        ]);
        Faq::create([
            'question' => 'Apakah diperbolehkan berenang di sekitar air terjun?',
            'answer' => 'Tidak, karena takutnya air meluap, arus deras, dan bebatuan yang licin',
        ]);
        Faq::create([
            'question' => 'Apakah ada tempat untuk membeli makanan dan minuman di lokasi?',
            'answer' => 'Ya, terdapat warung-warung yang menjual makanan ringan, minuman, dan jajanan di sekitar parkiran dan jalur menuju air terjun.',
        ]);
        Faq::create([
            'question' => 'Apakah Curug Cipendok cocok untuk kegiatan keluarga?',
            'answer' => 'Ya, Curug Cipendok cocok untuk wisata keluarga karena suasananya yang alami, fasilitas yang lengkap, dan jalur tracking yang relatif mudah.',
        ]);
        Faq::create([
            'question' => 'Bagaimana kondisi jalan menuju Curug Cipendok?',
            'answer' => 'Jalan menuju Curug Cipendok sudah beraspal dan dapat diakses dengan kendaraan roda dua maupun roda empat.',
        ]);
        Faq::create([
            'question' => 'Apakah tersedia pemandu wisata di Curug Cipendok?',
            'answer' => 'Saat ini, pemandu wisata belum tersedia secara resmi, namun warga sekitar biasanya bersedia memberikan informasi kepada pengunjung.',
        ]);
        Faq::create([
            'question' => 'Apa waktu terbaik untuk berkunjung ke Curug Cipendok?',
            'answer' => 'Waktu terbaik untuk berkunjung adalah pagi hingga siang hari, terutama di musim kemarau, untuk menghindari hujan dan jalur yang licin.',
        ]);
        Faq::create([
            'question' => 'Apakah ada atraksi lain di sekitar Curug Cipendok?',
            'answer' => 'Selain air terjun, Anda juga dapat menikmati keindahan hutan sekitar yang menjadi habitat berbagai flora dan fauna.',
        ]);
        Faq::create([
            'question' => 'Apakah Curug Cipendok ramah bagi pengunjung dengan kebutuhan khusus?',
            'answer' => 'Karena jalur menuju air terjun melibatkan jalan setapak dan tracking, aksesibilitas untuk pengunjung dengan kebutuhan khusus mungkin terbatas.',
        ]);

    }
}