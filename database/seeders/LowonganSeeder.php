<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lowongan')->insert([
            [
                'nama_posisi' => 'Software Engineer',
                'deskripsi_pekerjaan' => 'Develop and maintain software applications.',
                'jumlah_kuota' => 5,
                'durasi_magang' => '6 Months',
                'persyaratan' => 'Bachelor degree in Computer Science.',
                'id_mentor' => 1,  // ID Mentor (sesuaikan dengan data mentor yang ada)
                'status' => 'disetujui',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'dibuka_sampai' => '2025-06-30',
            ],
            [
                'nama_posisi' => 'UI/UX Designer',
                'deskripsi_pekerjaan' => 'Design and improve user interfaces.',
                'jumlah_kuota' => 3,
                'durasi_magang' => '4 Months',
                'persyaratan' => 'Experience in design tools like Figma.',
                'id_mentor' => 1,  // ID Mentor (sesuaikan dengan data mentor yang ada)
                'status' => 'disetujui',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'dibuka_sampai' => '2025-07-15',
            ],
            [
                'nama_posisi' => 'Data Scientist',
                'deskripsi_pekerjaan' => 'Analyze and interpret complex data.',
                'jumlah_kuota' => 4,
                'durasi_magang' => '5 Months',
                'persyaratan' => 'Knowledge of machine learning algorithms.',
                'id_mentor' => 1,  // ID Mentor (sesuaikan dengan data mentor yang ada)
                'status' => 'disetujui',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'dibuka_sampai' => '2025-08-01',
            ],
            [
                'nama_posisi' => 'Marketing Intern',
                'deskripsi_pekerjaan' => 'Assist in digital marketing campaigns.',
                'jumlah_kuota' => 2,
                'durasi_magang' => '3 Months',
                'persyaratan' => 'Interest in digital marketing.',
                'id_mentor' => 1,  // ID Mentor (sesuaikan dengan data mentor yang ada)
                'status' => 'disetujui',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'dibuka_sampai' => '2025-06-10',
            ],
            [
                'nama_posisi' => 'Content Writer',
                'deskripsi_pekerjaan' => 'Write articles and blog posts.',
                'jumlah_kuota' => 6,
                'durasi_magang' => '4 Months',
                'persyaratan' => 'Excellent writing skills in English.',
                'id_mentor' => 1,  // ID Mentor (sesuaikan dengan data mentor yang ada)
                'status' => 'disetujui',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'dibuka_sampai' => '2025-07-20',
            ]
        ]);
    }
}