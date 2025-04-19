<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Laporan;
use App\Models\Mahasiswa;
use App\Models\User;

class LaporanTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function halaman_upload_laporan_bisa_diakses()
    {
        $response = $this->get(route('laporan.index'));
 
        $response->assertStatus(200);
        $response->assertSeeText('Laporan Harian');
    }

    /** @test */
    public function user_bisa_mengirimkan_laporan_dengan_data_valid()
    {
        $response = $this->post(route('laporan.store'), [
            'tanggal' => now()->format('Y-m-d'),
            'deskripsi' => 'Mengerjakan fitur laporan harian di Laravel',
        ]);

        $response->assertRedirect(); // Redirect balik
        $this->assertDatabaseHas('laporan', [
            'jenis_laporan' => 'laporan_harian',
            'deskripsi_pekerjaan' => 'Mengerjakan fitur laporan harian di Laravel',
            'status' => 'diproses',
        ]);
    }

    /** @test */
    public function validasi_gagal_jika_tanggal_kosong()
    {
        $response = $this->from(route('laporan.index'))->post(route('laporan.store'), [
            'tanggal' => '',
            'deskripsi' => 'Deskripsi ada tapi tanggal kosong',
        ]);

        $response->assertRedirect(route('laporan.index'));
        $response->assertSessionHasErrors('tanggal');
    }

    /** @test */
    public function validasi_gagal_jika_deskripsi_kosong()
    {
        $response = $this->from(route('laporan.index'))->post(route('laporan.store'), [
            'tanggal' => now()->format('Y-m-d'),
            'deskripsi' => '',
        ]);

        $response->assertRedirect(route('laporan.index'));
        $response->assertSessionHasErrors('deskripsi');
    }
}