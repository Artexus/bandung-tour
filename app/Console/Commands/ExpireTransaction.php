<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExpireTransaction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'transactions:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Handle Transaction status that already have exceeded the expiration time';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $expirationTime = Carbon::now()->subHour();

        Transaction::where('status', 'ON_PROGRESS')
            ->where('created_at', '<=', $expirationTime)
            ->update(['status' => 'FAILED']);
    }
}
