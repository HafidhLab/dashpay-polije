<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SyncBalanceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-balance-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::post('https://bc.kcbindo.co.id/wallet', [
            'username' => 'superuser123'
        ]);

        if ($response->successful()) {
            $balanceData = $response->json();
            User::updateOrCreate(['username' => 'superuser123'], [
                'balance' => $balanceData['balance']
            ]);
            $this->info('Balance successfully synchronized.');
        } else {
            $this->error('Failed to sync balance.');
        }
    }
}
