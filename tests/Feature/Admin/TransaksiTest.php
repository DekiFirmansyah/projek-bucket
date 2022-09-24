<?php

namespace Tests\Admin\TransaksiTest;

use App\Models\Transaksi;
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

    public function test_table_transaksi_from_database()
    {
        $this->assertDatabaseHas('transaksi', [
            'id' => '6',
            'pembayaran' => 'sukses',
        ]);
    }

    public function test_transaksi_table()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/transaksi');

        $response->assertSeeText('Pembayaran');
        $response->assertSeeText('Status');
        $response->assertSeeText('Catatan');
        $response->assertSeeText('Action');
        $response->assertStatus(200);
    }

    public function test_edit_data_shown_correcly()
    {
        $id = 6;
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/transaksi/'.$id.'/edit');

        $response->assertSee('Pembayaran');
        $response->assertSee('Status');
        $response->assertStatus(200);
    }

    public function test_update_transaksi_by_id()
    {
        $data = Transaksi::find(7);

        $this->followingRedirects()->put($data->id, [
            'pembayaran' => 'sukses',
        ]);

        $this->assertDatabaseHas('transaksi', $data->toArray());
        $this->assertTrue(true);
    }

    public function test_delete_transaksi_by_id()
    {
        $data = Transaksi::find(7);

        $this->followingRedirects()->delete($data->id);
        $this->assertDatabaseHas('transaksi', $data->toArray());
        $this->assertTrue(true);
    }
}
