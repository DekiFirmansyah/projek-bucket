<?php

namespace Tests\Admin\BarangTest;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_table_barang_from_database()
    {
        $this->assertDatabaseHas('barang', [
            'id' => '1',
            'kategori' => 'bunga mawar',
        ]);
    }

    public function test_barang_table()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/barang');

        $response->assertSeeText('Nama');
        $response->assertSeeText('Harga');
        $response->assertSeeText('Kategori');
        $response->assertSeeText('Estimasi Pembuatan');
        $response->assertSeeText('Foto');
        $response->assertSeeText('Catatan');
        $response->assertSeeText('Action');
        $response->assertStatus(200);
    }

    public function test_barang_create()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/barang/create');

        $response->assertSee('Nama');
        $response->assertSee('Harga');
        $response->assertSee('Harga');
        $response->assertSee('Kategori');
        $response->assertSee('Estimasi Pembuatan');
        $response->assertSee('Foto Profil');
        $response->assertSee('Catatan');
        $response->assertStatus(200);
    }

    public function test_add_data_barang()
    {
        $response = $this->followingRedirects()->post('/barang', [
            'nama' => 'Bucket Hijab',
            'harga' => '80000',
            'kategori' => 'Hijab Pasmina',
            'estimasi_pembuatan' => '5 jam',
            'foto' => NULL,
            'catatan' => 'Lorem Ipsum Testing',
        ]);

        $response->assertStatus(200);
    }

    public function test_edit_data_shown_correcly()
    {
        $id = 1;
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/barang/'.$id.'/edit');

        $response->assertSee('Nama');
        $response->assertSee('Harga');
        $response->assertSee('Harga');
        $response->assertSee('Kategori');
        $response->assertSee('Estimasi Pembuatan');
        $response->assertSee('Foto Barang');
        $response->assertSee('Catatan');
        $response->assertStatus(200);
    }

    public function test_update_barang_by_id()
    {
        $data = Barang::find(4);

        $this->followingRedirects()->put($data->id, [
            'harga' => '30000',
        ]);

        $this->assertDatabaseHas('barang', $data->toArray());
        $this->assertTrue(true);
    }

    public function test_delete_barang_by_id()
    {
        $data = Barang::find(4);

        $this->followingRedirects()->delete($data->id);
        $this->assertDatabaseHas('barang', $data->toArray());
        $this->assertTrue(true);
    }
}
