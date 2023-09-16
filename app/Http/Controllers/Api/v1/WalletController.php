<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WalletController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $response = Http::post('https://bc.kcbindo.co.id/wallet',[
            'username' => 'superuser123'
        ]);
        return $response->body();
    }
}
