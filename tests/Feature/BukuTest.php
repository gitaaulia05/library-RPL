<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BukuTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCreateSuccess()
    {
        //  $this->seed([UserSeeder::class]);
        $this->post('/api/buku' , [
          "id_buku" => "23552011908",
            "nama_buku" => "30 Cerita Teladan Islami",
            "nama_penulis" => "Mahmudah Mastur",
            "nama_penerbit" => "Noktah",
            "jumlah_buku" => "88",
            "buku_tersedia" => "1",
            "tanggal_masuk_buku" => "2024-12-04",
            "update_terakhir" => "2024-12-04",
        ] )
        ->assertStatus(201)
        ->assertJson([
            'data' => [
                "id_buku" => "23552011908",
            "nama_buku" => "30 Cerita Teladan Islami",
            "nama_penulis" => "Mahmudah Mastur",
            "nama_penerbit" => "Noktah",
            "jumlah_buku" => "88",
            "buku_tersedia" => "1",
            "tanggal_masuk_buku" => "2024-12-04",
            "update_terakhir" => "2024-12-04",
            ]
        ]);
    }
}
