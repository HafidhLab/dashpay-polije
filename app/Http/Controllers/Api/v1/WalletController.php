<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WalletController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
         // Lakukan permintaan HTTP untuk mendapatkan data balance
        $response = Http::post('https://bc.kcbindo.co.id/wallet', [
            'username' => 'superuser123'
        ]);

        // Periksa apakah permintaan HTTP berhasil
        if ($response->successful()) {
            // Ambil data balance dari respons HTTP
            $balanceData = $response->json(); // Jika respons adalah JSON

            // Simpan atau perbarui balance di database
            User::updateOrCreate(['username' => 'superuser123'], [
                'balance' => $balanceData['balance'] // Sesuaikan dengan kunci yang benar
            ]);

            // Mengembalikan pesan atau respons yang sesuai
            return response()->json(['message' => 'Balance telah diperbarui'], 200);
        } else {
            // Jika permintaan HTTP tidak berhasil, tangani kesalahan di sini
            return response()->json(['error' => 'Gagal mengambil data balance'], $response->status());
        }
    }
}
